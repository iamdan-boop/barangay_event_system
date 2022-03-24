<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .wrapper{
            width: 816px;
            height: 1054 px;
            transform: translateX(-50%);
            left: 50%;
            background:#fff;
            position: absolute;
            table-layout: fixed;
        }
        .content-wrapper{
            width: 716px;
            height: 1000px;
            border: 2px solid #000;
            margin-left: 50px;
        }
        .header{
            width: 100%;
        }

    </style>
    <title>Certification</title>
</head>
<body>
    <div class="wrapper">
        <div class="content-wrapper">

            <!-- header -->

            <table class="header">
                <tr>
                    <td style="width: 25%;">
                        <img src="images/logo_naga.png" alt="Logo Naga" width="100px" height="100px" style="padding-left: 25px;">
                    </td>
                    <td style="width: 50%; text-align: center;">
                        <p>Republic of the Philippines</p>
                        <p>City of Naga</p>
                        <p style="font-weight: 600; font-size: 17px;">Barangay Pacol</p>
                    </td>
                    <td style="width: 25%; padding-left: 50px;">
                        <img src="images/official_seal.png" alt="Naga Seal" width="100px" height="100px">
                    </td>
                </tr>
                
            </table>
            
            <!-- title -->

            <table width="100%">

                <tr>
                    <td style="text-align: center; border-bottom: 2px solid #000; box-shadow: 0 5px 5px 0 #000;"><p style="font-weight: 600; font-size: 18px;">OFFICE OF THE PUNONG BARANGAY</p></td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <h1>CERTIFICATION</h1>
                    </td>
                </tr>
                
            </table>

            <!-- content -->
            <center>
            <table width="90%">
                <tr>
                    <td style="padding-left: 50px;">
                        <p><b>TO WHOM IT MAY CONCERN:</b></p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 50px;">
                        <p style="text-align: justify; line-height: 20px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that <b>{{$citizen['last_name']}} {{$citizen['first_name']}} {{$citizen['middle_name']}}</b>, 
                            of legal age, {{$citizen['status']}} and residing at {{$citizen['address']}} is a legitimate and bonafide
                            resident of this barangay.
                        </p>
                        <p style="text-align: justify; line-height: 20px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Subject individuals has no
                            immunodeficiency, commorbidity condition, or other health risks. Furthermore, he have observed home quarantine
                            and is not a person under monitoring (PUM) or person under investigation (PUI) in relation to COVID-19 he's also
                            free from virus as of this date and is <b>PHYSICALLY FIT to work.</b> Still for verification of City Health Office.
                        
                        </p>
                        <p style="text-align: justify; line-height: 20px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This certification is being issued upon the request
                            of the interested party for {{$purpose}} purpose only.

                        </p>
                        <p style="text-align: justify; line-height: 20px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Given this {{Carbon\Carbon::parse($created_at)->format('jS')}} day of {{Carbon\Carbon::parse($created_at)->format('F Y')}} at Barangay Pacol, Naga City, Philippines.
                
                        </p>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <p style="padding-left: 400px; padding-top: 50px; font-weight: 600; text-align: center;">{{strtoupper($captain)}}</p>
                        <p style="padding-left: 400px; padding-top: -10px; text-align: center;">Punong Barangay</p>
                    </td>
                </tr>
            </table>

            <!-- footer -->

            <table width="50%">
                <tr>
                    <td style="width: 25%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="qr_codes/{{$qr_codes}}" alt="QR CODES" width="140px" height="140px" 
                                    style="margin-right: 20px; margin-top: 10px;
                                            border: 1px solid #000;"></td>
                    <td style="text-align: center; position: relative;">
                        <div style="position: absolute; left: 60px; top:  130px; width: 300px;">
                            <p>Pacol Barangay Hall <br>
                            KM 9 Zone 1 Pacol, Naga City <br>
                            Tel No. (054)871-48-22 <br>
                            Mobile No. 09498232342</p>
                        </div>
                    </td>
                </tr>
            </table>


            <table width="100%">
                <tr>
                    <td>
                        <p style="text-align:  center; margin-top: 0; margin-left: 0px; margin-top: 90px;">Control #<b style="color: red;">{{$control_number}}</b></p>
                    </td>
                </tr>   
            </table>
            </center>

        </div>
    </div>
</body>
</html>