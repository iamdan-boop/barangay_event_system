<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            /* background-image: url(../public/images/receipt.jpg);
            background-repeat: no-repeat;  */
        }

        .content{
            width: 390px;
           
            position: absolute;
            transform: translateX(-50%);
            left: 30%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
        <div class="content">

        <table width="70%" style="border-collapse: collapse; padding-top:130px; padding-left:140px;">
            <tr>
                <td style="width:50px; font-size: 18px;">&nbsp; &nbsp;  &nbsp;{{Carbon\Carbon::parse($created_at)->format('m/d/y')}} </td>
                
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:8px; padding-left:62px;">
            <tr>
                <td style="font-size: 16px;">Agency &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;Fund </td>                
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:5px;">
            <tr>
            <td style="font-size: 18px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Payor</td>
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:48px; padding-left:13px;">
            <tr>
            <td style="font-size: 15px;">Nature of Collection &nbsp;  &nbsp;  &nbsp; Account Code &nbsp;  &nbsp;  &nbsp; 10</td>
            </tr>
        </table>
        <table width="100%" style="border-collapse: collapse; padding-top:25px; padding-left:13px;">
            <tr>
            <td style="font-size: 15px;">Nature of Collection &nbsp;  &nbsp;  &nbsp; Account Code &nbsp;  &nbsp;  &nbsp; 10</td>
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:23px; padding-left:13px;">
            <tr>
            <td style="font-size: 15px;">Nature of Collection &nbsp;  &nbsp;  &nbsp; Account Code &nbsp;  &nbsp;  &nbsp; 10</td>
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:21px; padding-left:13px;">
            <tr>
            <td style="font-size: 15px;">Nature of Collection &nbsp;  &nbsp;  &nbsp; Account Code &nbsp;  &nbsp;  &nbsp; 10</td>
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:21px; padding-left:13px;">
            <tr>
            <td style="font-size: 15px;">&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 40</td>
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:33px; padding-left:13px;">
            <tr>
            <td style="font-size: 15px;">FORTY PESOS</td>
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:10px; padding-left:13px;">
            <tr>
            <td style="font-size: 15px;">&nbsp;/</td>
            </tr>
        </table>
        <table width="100%" style="border-collapse: collapse; padding-top:2px; padding-left:13px;">
            <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bank &nbsp; &nbsp; &nbsp; &nbsp; 123 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; date</td>
            </tr>
        </table>

        <table width="100%" style="border-collapse: collapse; padding-top:63px; padding-left:133px;">
            <tr>
            <td style="font-size: 15px;">TREASURER NAME</td>
            </tr>
        </table>
        

            <!-- <table width="100%"  style="border-collapse: collapse; border: 1px solid #000;">
                <tr>
                    <td style="border: 1px solid #000; width: 120px;">
                        <img src="images/official_seal.png" alt="Dummy logo" style="width: 120px; height: 150px;">
                    </td>
                    <td> 
                        <table width="100%" style="border-collapse: collapse; border: 2px solid #000;">
                            <tr>
                                <td style="border: 1px solid #000; padding: 10px; text-align: center; font-weight: 600;" >
                                    <font>Official Receipt <br> of the <br> Republic of the Philippines</font>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #000; height: 40px;">
                                   <b style="margin-left: 5px;">No.</b> <font style="font-size: 25px; margin-left: 50px;"> 1393427 </font> <b style="margin-left: 50px;">G</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #000; height: 30px;"><font style="margin-left:5px"> Date</font></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="100%" style="border-collapse: collapse; border: 1px solid #000;">
                <tr>
                    <td style="width: 70%; padding-left: 5px;">
                        Agency : {{$agency}}
                    </td>
                    <td style="border: 1px solid #000; padding-left: 5px;">Fund : {{$fund}}</td>
                </tr>
            </table>
            <table width="100%" style="border-collapse: collapse; border: 1px solid #000;">
                <tr>
                    <td style=" padding-left: 5px;">Payor : {{$payor}}</td>
                </tr>
            </table>
            <table width ="100%" style="border-collapse: collapse; border: 1px solid #000; margin-top: 2px;">
                <tr>
                    <td style="border: 1px solid #000;  padding-left: 5px;">Nature of Collections</td>
                    <td style="border: 1px solid #000;  padding-left: 5px;">Amount Code</td>
                    <td style="border: 1px solid #000;  padding-left: 5px;">Amount</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;  padding-left: 5px;">₱</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="border-top:1px solid #000;  padding-left: 5px; border-left: 1px solid #000; border-bottom: 1px solid #000;">Total</td>
                    <td style="border-top:1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000;">&nbsp;</td>
                    <td style="border: 1px solid #000;  padding-left: 5px;">₱</td>
                </tr>
            </table>
            <table width="100%" style="border: 1px solid #000; border-collapse: collapse; margin-top: 2px;">
                <tr>
                    <td style=" padding-left: 5px;">Amount in Words</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;"> &nbsp;</td>
                </tr>
            </table>
            <table width="100%" style="border: 1px solid #000; border-collapse: collapse;">
                <tr>
                    <td style="width: 130px;  padding-left: 10px;">
                        <input type="checkbox" style="width: 10px; height: 8px; margin-top:  -10px; margin-right: 10px" {{$payment_method == 'Cash' ? 'checked' : ''}}> Cash
                    </td>
                     <td style="border: 1px solid #000; padding-left: 5px; text-align: center;">
                         Drawee <br> Bank
                     </td>  
                     <td style="border: 1px solid #000; padding-left: 5px; text-align: center;">Number</td>
                     <td style="border: 1px solid #000; padding-left: 5px; text-align: center;">Date</td>
                </tr>
                <tr>
                    <td style="height: 25px; padding-left: 5px;">
                        <input type="checkbox" style="width: 10px; padding-left: 5px; height: 8px; margin-top:  -10px; margin-right: 10px" {{$payment_method == 'Check' ? 'checked' : ''}}> Check
                    </td>
                    <td style="border: 1px solid #000;">{{$drawee_bank}}</td>
                    <td style="border: 1px solid #000;">{{$drawee_bank_number}}</td>
                    <td style="border: 1px solid #000;">{{$drawee_bank_date}}</td>
                </tr>
                <tr>
                    <td style="height: 20px; padding-left: 5px;">
                        <input type="checkbox" style="width: 10px; padding-left: 5px; height: 8px; margin-top:  -10px; margin-right: 10px" {{$payment_method == 'Money Order' ? 'checked' : ''}}> Money Order
                    </td>
                    <td></td>
                    <td style="border: 1px solid #000;"></td>
                    <td style="border: 1px solid #000;"></td>
                </tr>
            </table>
            <table width="100%" style="border: 1px solid #000; border-collapse: collapse;">
                <tr>
                    <td style=" padding-left: 5px;">
                        Received the amount stated above.
                    </td>
                </tr>
                <tr>
                    <td style="padding: 50px 20px 5px 0; text-align: right;">
                        <font style="text-decoration: overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Collecting Officer &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font>
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding-left: 5px; padding-bottom: 10px;">NOTE: Write the number and date of this receipt on <br>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; the back of check or money order received.</td>
                </tr>
            </table> -->
        </div>
</body>
</html>