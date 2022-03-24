<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cedula</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url(../public/images/cedula.jpg);
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
</head>
<body>
<div class="wrapper">
    <!-- <font style="font-size: 10px; margin-top: 5px; margin-left: 5px;">BIR FORM 0015(MARCH, 2000)</font>
    <table width="70%" style="border:1px solid #000;border-collapse: collapse;">
        <tr>
            <td style="padding-left: 10px; height: 25px;">COMMUNITY TAX CERTIFICATE</td>
            <td style="border: 1px solid #000; padding-left: 5px;">INDIVIDUAL</td>
        </tr>
    </table>
    <table width="70%" style="border:1px solid #000;border-collapse: collapse; font-size: 10px;">
        <tr>
            <td style="text-align: center; width: 50px; border: 1px solid #000;">YEAR</td>
            <td style="border: 1px solid #000;"><font style="margin-left: 5px;">PLACE OF ISSUE(City/Mun/Prov)</font></td>
            <td style="border: 1px solid #000; width: 108px;">DATE ISSUED</td>
        </tr> -->
    <!-- </table> -->
    <table width="70%" style="border-collapse: collapse; padding-top:57px;">
        <tr>
            <td style="width:50px; font-size: 18px;">&nbsp; &nbsp;
                &nbsp;{{Carbon\Carbon::parse($created_at)->format('y')}} </td>
            <td style="font-size: 18px;">&nbsp; PACOL, NAGA CITY &nbsp; &nbsp;
                &nbsp; {{Carbon\Carbon::parse($created_at)->format('m d Y')}}</td>
        <!-- <td style="">{{Carbon\Carbon::parse($created_at)->format('m-d-Y')}}</td> -->
        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse; padding-top:3px;">
        <tr>
            <td style="font-size: 16px;">&nbsp; &nbsp; &nbsp;{{$citizen['last_name']}} &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$citizen['first_name']}} &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$citizen['middle_name']}} &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 123 &nbsp; &nbsp; 456 &nbsp;
                &nbsp; 789
            </td>
            <td style="font-size: 18px;"></td>

        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse; padding-top:1px;">
        <tr>
            <td style="font-size: 16px;"> &nbsp; {{$citizen['address']}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp;/
            </td>


        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse; padding-top:1px;">
        <tr>
            <td style="font-size: 16px;"> &nbsp; &nbsp;{{$citizen['citizenship']}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; 123456789 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Naga City &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; 5 7
            </td>
        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse;">
        <tr>
            <td style="font-size: 15px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; / &nbsp; &nbsp;
                &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{Carbon\Carbon::parse($citizen['dob'])->format('m d Y')}} &nbsp;
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 50kg
            </td>
        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse;padding-top:1px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; {{$citizen['occupation']}} </td>
        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse;padding-left:490px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; 5.00</td>
        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse;padding-top:24px;padding-left:490px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; 1.00</td>
        </tr>
    </table>
    <table width="100%" style="border-collapse: collapse;padding-top:2px;padding-left:490px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; 1.00</td>
        </tr>
    </table>
    <table width="100%" style="border-collapse: collapse;padding-top:2px;padding-left:490px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; 1.00</td>
        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse;padding-top:4px;padding-left:490px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; 8.00</td>
        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse;padding-top:4px;padding-left:490px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; 2.00</td>
        </tr>
    </table>

    <table width="100%" style="border-collapse: collapse;padding-top:6px;padding-left:490px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; 10.00</td>
        </tr>
    </table>


    <table width="100%" style="border-collapse: collapse;padding-top:6px;padding-left:100px;">
        <tr>
            <td style="font-size: 15px;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; {{strtoupper($captain)}} </td>
        </tr>
    </table>

</div>
</body>
</html>
