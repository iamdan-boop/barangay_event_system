<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay certification</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .wrapper{
            width: 816px;
            height: 1054px;
            position: absolute;
            transform: translateX(-50%);
            left: 50%;
        }
        .content-wrapper{
            width: 716px;
            height: 1000px;
            margin-left: 50px;
            border: 2px solid #000;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="content-wrapper">

            <!-- header -->

            <table class="header" width="100%">
                
                <tr>
                    <td style="width: 25%;">
                        <img src="images/logo_naga.png" alt="Logo of Naga" width="100px" height="100px" style="padding-left: 20px;">
                    </td>
                    <td style="text-align: center;">
                        <p>Republic of the Philippines <br>
                            City of Naga <br>
                             <b> Barangay Pacol </b>
                        </p>
                    </td>
                    <td style="width:25%">
                        <img src="images/official_seal.png" alt="Naga Official Seal" width="100px" height="100px" style="padding-left: 50px;">
                    </td>
                </tr>
            </table>

            <!-- Title -->

            <table class="title" width="100%" style="margin-top: -20px;">
                <tr>
                    <td style="text-align: center; letter-spacing: 6px;">
                        <h3>OFFICE OF THE PUNONG BARANGAY</h3>
                        <hr style="border: 1px solid #000; margin-top: -10px; box-shadow: 0 2px 2px 0 rgb(7, 7, 7);">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; line-height: 5px;">
                        <h1>BARANGAY CERTIFICATION</h1>
                        <h4 style="margin-top: 30px;">(First Time Jobseeker Assistance Act-RA 11261)</h4>
                    </td>
                </tr>
            </table>

            <!-- content -->
            <center>
            <table class="content" width="90%" style="margin-top: 20px;">
                <tr>
                    <td style="padding-left: 50px; letter-spacing: 1px;">
                        <p><b><i> TO WHOM IT MAY CONCERN: </i></b></p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 50px; ">
                        <p style="text-align: justify; letter-spacing: 1px; line-height: 25px;">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that <b>{{$citizen['last_name']}} {{$citizen['first_name']}} {{$citizen['middle_name']}}</b>, 
                            whose signature appears below, of legal age, single, Filipino, is a bonafide and legitimate resident of
                            {{$citizen['address']}}, Pacol, Naga City is a person of <b>GOOD MORAL CHARACTER</b> and has 
                            <b>NO DEROGARORY RECORD/S</b> nor any complaint field against him/her by any person or entity.
                        </p>

                        <p style="text-align: justify; letter-spacing: 1px; line-height: 25px;">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This certification is issued upon the request of the interested party for
                            <u><b>{{$purpose}}</b></u> and/or any legal purpose it may serve.
                        </p>

                        <p style="text-align: justify; letter-spacing: 1px; line-height: 25px;">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Issued this {{Carbon\Carbon::parse($created_at)->format('jS')}} day of  {{Carbon\Carbon::parse($created_at)->format('F Y')}} at Barangay Pacol, Naga City, Philippines.
                        </p>
                    </td>
                </tr>
                
            </table>

            <!-- signatures -->

            <table class="signing" width="80%">
                <tr>
                    <td>
                        <img src="{{ isset($image['image']) ? $image['image'] : ''}}" alt="Dummy Picture" width="120px" height="120px" style="margin-left: 80px; border: 1px solid #000;">
                    </td>
                    <td style="line-height: 25px; position:  relative; padding-top: 50px;">
                        <div style="position: absolute; left: 200px; width: 200px; text-align: center;">
                            <p><b>{{strtoupper($captain)}}</b> <br>
                            Punong Barangay
                            </p>
                        </div>
                    </td>  
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 80px;"> Applicant's signature</p>
                    </td>
                </tr>
            </table>

            <!-- footer -->

            <table width="50%">
                <tr>
                    <td style="width: 25%; position: relative;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="qr_codes/{{$qr_codes}}" alt="QR CODES" width="140px" height="140px" 
                                    style="position: absolute; top:  0px; left:  75px;
                                            border: 1px solid #000;"></td>
                    <td style="text-align: center; position: relative;">
                        <div style="position: absolute; left: 60px; top:  110px; width: 300px;">
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
                        <p style="text-align:  center; margin-top: 0; margin-left: 0px; margin-top: 200px;">Control #<b style="color: red;">{{$control_number}}</b></p>
                    </td>
                </tr>   
            </table>
        </center>

        </div>
    </div>
    
</body>
</html>