<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Api\InvoicesController;
use App\Product;
use App\Purchase;
use App\Purchase_Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $invoiceController = new InvoicesController();
        $invoiceController = $invoiceController->index();
        $invoices_today = $invoiceController->where('created_at','>=', Carbon::today());
        $invoices_yesterday = $invoiceController->whereBetween('created_at', [Carbon::yesterday(), Carbon::today()]);
        $invoices_this_month = $invoiceController->where('created_at','>=', Carbon::today()->subMonth());
        $product = Product::paginate(4);
        $customers = Customer::all();
        $pps= Purchase_Product::all();
        $tmp_quantity = 0;
        $tmp_left = 0;
        $week_income = [];
        $week_profit = [];
        $week_invoice_count=[];
        $week_purchase_count=[];
        $money_today=0;
        $money_this_month = 0;
        foreach ($pps as $pp){
            if ($pp->left>0){
                $tmp_quantity += $pp->quantity;
                $tmp_left += $pp->left;
            }
        }
        $percent_purchase_product = ($tmp_left/$tmp_quantity)*100;
        foreach ($invoices_today as $invoice){
            foreach ($invoice->Product as $invoice_product){
                foreach ($invoice_product->Purchase as $invoice_purchase){
                    $money_today+=($invoice_purchase->profit)*($invoice_purchase->quantity);
                }
            }
        }
        foreach ($invoices_this_month as $invoice){
            foreach ($invoice->Product as $invoice_product){
                foreach ($invoice_product->Purchase as $invoice_purchase){
                    $money_this_month+=($invoice_purchase->profit)*($invoice_purchase->quantity);
                }
            }
        }
        for ($i = 0; $i < 7; $i++){
            $tmp = $invoiceController->whereBetween('created_at',[Carbon::today()->subDays($i+1),Carbon::today()->subDays($i)]);
            $mon_tmp = 0;
            $profit_tmp = 0;
            foreach ($tmp as $inv){
                $mon_tmp+=$inv->total_amount;
                foreach ($inv->Product as $inv_prd){
                    foreach ($inv_prd->Purchase as $inv_pur){
                        $profit_tmp+=($inv_pur->profit)*($inv_pur->quantity);
                    }

                }
            }
            $mon_tmp=$mon_tmp/1000;
            $profit_tmp=$profit_tmp/1000;
            array_push($week_income,$mon_tmp);
            array_push($week_profit, $profit_tmp);
            array_push($week_invoice_count,count($tmp));
            array_push($week_purchase_count, count(Purchase::all()->whereBetween('created_at',[Carbon::today()->subDays($i+1),Carbon::today()->subDays($i)])));
        }
        return view('welcome')
            ->with(['invoices_today'=>$invoices_today,
                    'invoices_yesterday'=>$invoices_yesterday,
                    'invoices_this_month'=>$invoices_this_month,
                    'money_today'=>$money_today,
                    'money_this_month'=>$money_this_month,
                    'week_income'=>$week_income,
                    'week_profit'=>$week_profit,
                    'customers'=>$customers,
                    'week_invoice_count'=>$week_invoice_count,
                    'week_purchase_count'=>$week_purchase_count,
                    'percent_purchase_product'=>$percent_purchase_product,
                    'product'=>$product]);
    }
}
