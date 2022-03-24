<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>

    body {
        padding: 0;
        margin: 0;
        background-repeat: no-repeat;
    }

    .wrapper {
        width: 700px;
        /* border: 1px solid #000; */
        position: absolute;
        transform: translateX(-50%);
        left: 50%;
    }

    .wrapper .right-row {
        width: 210px;
        position: absolute;
        left: 70%;
        top: 17px;
    }


</style>
<body>

<div class="wrapper">
{{--    <img style="transform: rotate(90deg); height: 33%; width: 100%; margin-top: 18%; " src="images/tax.jpg" alt="">--}}
    <div class="wrapper">

        <div style="margin-left: 57%; margin-top: 20%;">
            <label>
                {{ $tax_payment->created_at }}
            </label>
        </div>

        <div style="display: flex; margin-left: 44%; margin-top: 2%;">

            <label style="margin-right: 3%;">
                {{ $tax_payment->agency }}
            </label>

            <label style="margin-left: 16%;">
                {{ $tax_payment->fund }}
            </label>

        </div>


        <div style="margin-left: 43%; margin-top: 8px;">
            <label>
                {{ $tax_payment->citizen->first_name. ' '. $tax_payment->citizen->last_name  }}
            </label>
        </div>

        <div style="display: flex; margin-top: 7%; margin-left: 37%;">
            <label>
                {{ $tax_payment->nature_of_collection }}
            </label>

            <label>
                {{ $tax_payment->account_code }}
            </label>

            <label style="margin-left: 1%; ">
                {{ $tax_payment->amount }}
            </label>
        </div>


        <div style="margin-top: 21%; margin-left: 71%;">
            <label>
                {{ $tax_payment->amount }}
            </label>
        </div>

        <div style="margin-top: 4%; margin-left: 38%;">
            <label>
                {{ $formatted_amount }}
            </label>
        </div>

        <div style="margin-top: 7px; margin-left: 38%;">
            <label>
                /
            </label>
        </div>

        <div style="margin-top: 10px; margin-left: 47%; font-size: 10px; display: flex;">
            <label>
                {{ $tax_payment->drawee_bank }}
            </label>

            <label>
                {{ $tax_payment->drawee_bank_number }}
            </label>



        </div>

        <div style="margin-top: 10%; margin-left: 54%;">
            <label>
                {{ auth()->user()->first_name. ' '. auth()->user()->last_name }}
            </label>
        </div>

    </div>
</div>


</body>
</html>
