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
    <title>Certification for Cessation Business</title>
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
                        <p>Republic of the Philippines <br>
                            City of Naga</p>
                        <p style="font-weight: 600; font-size: 17px;">Barangay Pacol</p>
                    </td>
                    <td style="width: 25%; padding-left: 50px;">
                        <img src="images/official_seal.png" alt="Naga Seal" width="100px" height="100px">
                    </td>
                </tr>
                
            </table>
            
            <!-- title -->

            <table width="100%" style="margin-top: -30px;">

                <tr>
                    <td style="text-align: center; border-bottom: 2px solid #000; box-shadow: 0 5px 5px 0 #000;"><p style="font-weight: 600; font-size: 18px;">OFFICE OF THE PUNONG BARANGAY</p></td>
                </tr>
                <tr>
                    <td style="text-align: center;line-height: 50px;">
                        <h2>CERTIFICATION FOR CESSATION OF BUSINESS</h2>
                    </td>
                </tr>
                
            </table>

            <!-- content -->
            <center>
            <table width="90%" style="margin-top: 20px;"> 
                <tr>
                    <td style="padding-left: 50px">
                        <p><b>TO WHOM IT MAY CONCERN:</b></p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 50px">
                        <p style="text-align: justify; line-height: 20px; letter-spacing: 1px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that <b><u>{{$business_name}}</u></b>, 
                         located at {{$address}} owned by <b>{{$business_owner}},</b>
                         of {{$owner_address}} have stopped operation last December 31, 2020.
                        </p>
                        <p style="text-align: justify; line-height: 20px; letter-spacing: 1px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This certification is issued upon the request
                            of the interested party for <b><u>{{$purpose}}</u></b> purpose only.

                        </p>
                        <p style="text-align: justify; line-height: 20px; letter-spacing: 1px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Issued this {{Carbon\Carbon::parse($created_at)->format('jS')}} of {{Carbon\Carbon::parse($created_at)->format('F Y')}} at Barangay Pacol, Naga City Philippines.
                
                        </p>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <p style="padding-left: 400px; padding-top: 50px; font-weight: 600;">{{strtoupper($captain)}}.</p>
                        <p style="padding-left: 425px;">Punong Barangay</p>
                    </td>
                </tr>
            </table>

            <!-- footer -->

            <table width="50%">
                <tr>
                    <td style="width: 25%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="qr_codes/qr_21.png" alt="QR CODES" width="140px" height="140px" 
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
            </center>

        </div>
    </div>
</body>
</html>