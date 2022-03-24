<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Clearance</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .wrapper{
            height: 1054px;
            background-color: #fff;
            transform: translateX(-50%);
            left: 50%;
            position:absolute;
            width: 816px;
            table-layout: fixed;
        }
        .content-wrapper{
            height: 1000px;
            width: 716px;
            margin-left: 50px;
            border: 2px solid #000;
        }

        .header{
            width: 100%;
        }
        .clearance{
            width: 100%;
        }
        .clearance td{
            text-align: center;
            font-size: 22pt;
            font-weight: 600;
        }
        .content{
            width: 100%;
        }
        .footer{
            width: 100%;
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <div class="wrapper">

        <div class="content-wrapper">
            <!-- header part -->

                <table class="header">
                    <tr>
                        <td>
                            <img src="images/logo_naga.png"
                                style="width: 100px;
                                        height: 100px;
                                        padding-top: 10px;
                                        padding-left: 50px;">
                        </td>
                        <td style="text-align: center;">
                            <p style="font-size: 16px;">
                                 Republic of the Philippines<br>
                                 City of Naga<br>
                                 <b style="font-size: 18px;">Barangay Pacol</b>
                            </p>
                            <p style="font-size: 20px;">
                                OFFICE OF THE PUNONG BARANGAY
                            </p>
                        </td>
                        <td>
                            <img src="images/official_seal.png"
                                style="width: 100px;
                                        height: 100px;
                                        padding-left: 10px;
                                        padding-top: 10px;">
                        </td>
                    </tr>
                </table>

                <!-- Title part -->

                <table class="clearance">
                    <tr>
                        <td>BARANGAY CLEARANCE</td>
                    </tr>
                </table>

                <!-- Content part -->

                <table class="content">
                    <tr>
                        <td style="font-size: 16px;
                                    padding-top: 25px;
                                    padding-left: 50px;">
                            To Whom It May Concern:
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px;
                                    padding-right: 50px;
                                    font-size: 16px;
                                    padding-right: 25px;">
                            <p style="text-align: justify; line-height: 25px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that &nbsp;
                                <h7 style="text-decoration: underline; font-weight: 600;">&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$citizen['last_name']}} {{$citizen['first_name']}} {{$citizen['middle_name']}}. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;,</h7>
                                <br><b style="text-decoration: underline;">&nbsp;&nbsp; &nbsp; 45  &nbsp;</b> years of age,
                                    <b style="text-decoration: underline;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$citizen['status']}} &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b>, whose signature and picture apperas below, with Community Tax Certificate No.
                                    <b style="text-decoration: underline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$community_tax}} &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</b>, issued on
                                    <b style="text-decoration: underline;">&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; {{Carbon\Carbon::parse($created_at)->format('Y-m-d')}} &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; </b> at
                                    <b style="text-decoration: underline;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pacol, Naga City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b>, and a BONAFIDE RESIDENT of this barangay with postal address at
                                    <b style="text-decoration: underline;">&nbsp; &nbsp; &nbsp; &nbsp;{{$citizen['address']}} &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</b> is a person of a
                                    <b>GOOD MORAL CHARACTER</b> and has
                                    <b>NO DEROGATORY RECORD </b> nor any complaint file against him/her by any person, group or entity as per record on file in this office.
                                    <br>
                                    <br>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This certification is being issued upon request of the above-named person for<br>
                                    <u>&nbsp; &nbsp;&nbsp; &nbsp; {{$purpose}} &nbsp; &nbsp;</u> purpose only.
                                    <br>
                                    <br>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Issued this
                                    <u>&nbsp; {{Carbon\Carbon::parse($created_at)->format('jS')}} &nbsp; </u> day of
                                    <u>&nbsp; {{Carbon\Carbon::parse($created_at)->format('F Y')}} &nbsp;</u> at Barangay Pacol, Naga City, Philippines.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left: 400px; text-align: center; padding-top: 40px;">
                            <b> {{strtoupper($captain)}}</b><br>
                            Punong Barangay
                        </td>
                    </tr>


                </table>

                <!-- Footer part -->

                <table class="footer">
                    <tr>
                        <td style="width: 5%;">
                             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Amount Paid<br>
                             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Doc Stamp<br>
                             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; O.R No. <br>
                             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Date
                        </td>
                        <td>
                            : <br>
                            : <br>
                            : <br>
                            : <br>
                        </td>
                        <td style="width: 15%; text-align: center">
                            <u>{{$amount_paid}}</u><br>
                            <u>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </u><br>
                            <u>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</u><br>
                            <u>&nbsp; {{Carbon\Carbon::parse($created_at)->format('Y-m-d')}} </u>

                        </td>
                        <td>
                            <img src="{{ isset($image['image']) ? $image['image'] : ''}}" alt="Dummy Picture" width="120px" height="120px"
                                    style="margin-left: 100px;
                                            border: 1px solid #000;">

                        </td>
                    </tr>

                    <tr>
                        <td style="width: 25%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="qr_codes/{{$qr_codes}}" alt="QR CODES" width="140px" height="140px"
                                    style="margin-right: 20px; margin-top: 10px;
                                            border: 1px solid #000;"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="padding-top: 0px; padding-left: 70px;">
                            <p> &nbsp; &nbsp; Applicant's signature &nbsp; &nbsp; </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%;">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p style="text-align:  center; margin-top: 0; margin-left: 0px; margin-top: 0px;">Control #<b style="color: red;">{{$control_number}}</b></p>
                        </td>
                    </tr>

                </table>
            </div>
    </div>
</body>
</html>
