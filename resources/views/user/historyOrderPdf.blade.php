<!DOCTYPE html>
<!--
Invoice template by invoicebus.com
To customize this template consider following this guide https://invoicebus.com/how-to-create-invoice-template/
This template is under Invoicebus Template License, see https://invoicebus.com/templates/license/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Invoice {{ $order->invoice_no }}</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700&subset=cyrillic,cyrillic-ext,latin,greek-ext,greek,latin-ext,vietnamese");
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font: inherit;
        font-size: 100%;
        vertical-align: baseline;
        }

        html {
        line-height: 1;
        }

        ol, ul {
        list-style: none;
        }

        table {
        border-collapse: collapse;
        border-spacing: 0;
        }

        caption, th, td {
        text-align: left;
        font-weight: normal;
        vertical-align: middle;
        }

        q, blockquote {
        quotes: none;
        }
        q:before, q:after, blockquote:before, blockquote:after {
        content: "";
        content: none;
        }

        a img {
        border: none;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block;
        }

        /* Invoice styles */
        /**
        * DON'T override any styles for the <html> and <body> tags, as this may break the layout.
        * Instead wrap everything in one main <div id="container"> element where you may change
        * something like the font or the background of the invoice
        */
        html, body {
        /* MOVE ALONG, NOTHING TO CHANGE HERE! */
        }

        /** 
        * IMPORTANT NOTICE: DON'T USE '!important' otherwise this may lead to broken print layout.
        * Some browsers may require '!important' in oder to work properly but be careful with it.
        */
        .clearfix {
        display: block;
        clear: both;
        }

        .hidden {
        display: none;
        }

        b, strong, .bold {
        font-weight: bold;
        }

        #container {
        font: normal 13px/1.4em 'Open Sans', Sans-serif;
        margin: 0 auto;
        padding: 50px 40px;
        min-height: 1058px;
        }

        #memo .company-name {
        background: #8BA09E;
        background-size: 100px auto;
        padding: 10px 20px;
        position: relative;
        margin-bottom: 15px;
        }
        #memo .company-name span {
        color: white;
        display: inline-block;
        min-width: 20px;
        font-size: 36px;
        font-weight: bold;
        line-height: 1em;
        }
        #memo .company-info {
        font-size: 12px;
        color: #8b8b8b;
        margin-bottom: 20px;
        }
        #memo .company-info div {
        margin-bottom: 3px;
        min-width: 20px;
        }
        #memo .company-info span {
        display: inline-block;
        min-width: 20px;
        }
        #memo:after {
        content: '';
        display: block;
        clear: both;
        }

        #invoice-info {
            margin-bottom: 20px;
        }
        #invoice-info > div {

        }
        #invoice-info > div > span {
        display: block;
        min-width: 20px;
        min-height: 18px;
        margin-bottom: 3px;
        }
        #invoice-info > div:last-child {
        }
        #invoice-info:after {
        content: '';
        display: block;
        clear: both;
        }

        #client-info {
        margin-bottom: 40px;
        }
        #client-info > div {
        margin-bottom: 3px;
        min-width: 20px;
        }
        #client-info span {
        display: block;
        min-width: 20px;
        }

        #invoice-title-number {
        text-align: center;
        margin: 20px 0;
        }
        #invoice-title-number span {
        display: inline-block;
        min-width: 20px;
        }
        #invoice-title-number #title {
        margin-right: 15px;
        text-align: right;
        font-size: 20px;
        font-weight: bold;
        }
        #invoice-title-number #number {
        font-size: 15px;
        text-align: left;
        }

        table {
        table-layout: fixed;
        }
        table th, table td {
        vertical-align: top;
        word-break: keep-all;
        word-wrap: break-word;
        }

        #items {
        margin: 20px 0 35px 0;
        }
        #items .first-cell, #items table th:first-child, #items table td:first-child {
        width: 18px;
        text-align: right;
        }
        #items table {
        border-collapse: separate;
        width: 100%;
        }
        #items table th {
        padding: 12px 10px;
        text-align: right;
        background: #E6E7E7;
        border-bottom: 4px solid #487774;
        }
        #items table th:nth-child(2) {
        width: 30%;
        text-align: left;
        }
        #items table th:last-child {
        text-align: right;
        padding-right: 20px !important;
        }
        #items table td {
        padding: 15px 10px;
        text-align: right;
        border-right: 1px solid #CCCCCF;
        }
        #items table td:first-child {
        text-align: left;
        border-right: 0 !important;
        }
        #items table td:nth-child(2) {
        text-align: left;
        }
        #items table td:last-child {
        border-right: 0 !important;
        padding-right: 20px !important;
        }

        .currency {
        border-bottom: 4px solid #487774;
        padding: 0 20px;
        }
        .currency span {
        font-size: 11px;
        font-style: italic;
        color: #8b8b8b;
        display: inline-block;
        min-width: 20px;
        }

        #sums {
        background: #8BA09E;
        background-size: auto 100px;
        color: white;
        }
        #sums table tr th, #sums table tr td {
        padding: 8px 20px 8px 35px;
        font-weight: 600;
        }
        #sums table tr th {
        text-align: left;
        padding-right: 25px;
        }
        #sums table tr.amount-total th {
        text-transform: uppercase;
        }
        #sums table tr.amount-total th, #sums table tr.amount-total td {
        font-size: 16px;
        font-weight: bold;
        }
        #sums table tr:last-child th {
        text-transform: uppercase;
        }
        #sums table tr:last-child th, #sums table tr:last-child td {
        font-size: 16px;
        font-weight: bold;
        padding-top: 20px !important;
        padding-bottom: 40px !important;
        }

        #terms {
        margin: 50px 20px 10px 20px;
        }
        #terms > span {
        display: inline-block;
        min-width: 20px;
        font-weight: bold;
        }
        #terms > div {
        margin-top: 10px;
        min-height: 50px;
        min-width: 50px;
        }

        .payment-info {
        margin: 0 20px;
        }
        .payment-info div {
        font-size: 12px;
        color: #8b8b8b;
        display: inline-block;
        min-width: 20px;
        }

        .ib_bottom_row_commands {
        margin: 10px 0 0 20px !important;
        }

        .ibcl_tax_value:before {
        color: white !important;
        }

        /**
        * If the printed invoice is not looking as expected you may tune up
        * the print styles (you can use !important to override styles)
        */
        @media print {
        /* Here goes your print styles */
        }

    </style>
</head>
<body>
    <?php $status = DisplayStatusOrder::getStatus($order->status) ?>
    <div id="container">
        <section id="memo">
            <div class="company-name">
                <span>PT. Portanusa</span>
            </div>
            
            <div class="company-info">
                <div>
                    <span>
                        Ruko Permata Regensi Blok D No.37 Jl. H. Kelik Rt. 001/006 Kel. Srengseng,
                    </span><br/> 
                    <span>
                        Kec. Kembangan Kota Administrasi Jakarta Barat Daya.
                    </span>
                </div>
                <div>portanusa.com</div>
                <div>02154353007</div>
            </div>

        </section>
        
        <section id="invoice-info">
            <div>
                <span>Tanggal Transaksi : {{ date('d/m/y', strtotime($order->created_at)) }}</span>
                <span>Status Transaksi : {{ $status['message'] }}</span>
            </div>
        </section>
    
        <div class="clearfix"></div>
        
        <section id="invoice-title-number">
        
            <span id="title">Invoice</span>
            <span id="number">{{ $order->invoice_no }}</span>
            
        </section>
        
        <div class="clearfix"></div>
        
        @if(count($order_products) != 0)
        <section id="items">
            
            <table cellpadding="0" cellspacing="0">
            
            <tr>
                <th style="width:100px;text-align:left">No</th> <!-- Dummy cell for the row number and row commands -->
                <th>Nama Produk</th>
                <th>Quantity</th>
                <th>Harga</th>
                <th>Total harga</th>
            </tr>
            
            <?php $no = 1 ?>
            <?php $subtotal = 0 ?>
            @foreach($order_products as $product)
            <tr>
                <td>{{$no}}</td> <!-- Don't remove this column as it's needed for the row commands -->
                <td>{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>Rp {{ number_format($product->price, 0, 0, '.') }}</td>
                <td>
                    <?php 
                    $product_price = $product->quantity * $product->price;
                    $subtotal += $product_price;
                    ?>
                    Rp {{ number_format($product_price, 0, 0, '.') }}
                </td>
            </tr>
            <?php $no++ ?>
            @endforeach

            <tr>
                <td colspan="4" style="text-align:right;border-right:none;background-color:#8BA09E;color: #ffffff">Subtotal</td>
                <td style="text-align:right;border-right:none;background-color:#8BA09E;color: #ffffff">Rp {{ number_format($subtotal, 0, 0, '.') }}</td>
            </tr>
            @if(!empty($order->voucher_code))
            <tr>
                <td colspan="4" style="text-align:right;border-right:none;background-color:#8BA09E;color: #ffffff">Diskon</td>
                <td style="text-align:right;border-right:none;background-color:#8BA09E;color: #ffffff">Rp {{ number_format($order->discount_price, 0, 0, '.') }}</td>
            </tr>
            @endif
            <tr>
                <td colspan="4" style="text-align:right;border-right:none;background-color:#8BA09E;color: #ffffff">Ongkos Kirim</td>
                <td style="text-align:right;border-right:none;background-color:#8BA09E;color: #ffffff">Rp {{ number_format($order->shipping_price, 0, 0, '.') }}</td>
            </tr>
            
            <tr class="amount-total">
                <td colspan="4" style="text-align:right;border-right:none;background-color:#8BA09E;color: #ffffff">Total</td>
                <td style="text-align:right;border-right:none;background-color:#8BA09E;color: #ffffff">Rp {{ number_format($order->total_price, 0, 0, '.') }}</td>
            </tr>
            </table>
            
        </section>
        @endif
        
        <div class="clearfix"></div>
    </div>

</body>
</html>
