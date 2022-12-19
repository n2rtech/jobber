<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">


    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>

    <div class="invoice" style="max-width: 1000px;margin: 0 auto;">
        <!--Page-1-->
        <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;">
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo" style="width: 90px;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3" style="text-align: center;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo"></td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="font-size:28px;font-weight: 500;padding-top: 30px;padding-bottom: 20px;text-align: center;line-height: 43px;">
                        TV-Home Entertainment-Wi-Fi-Multi Room Music-Data Cabling Layout</td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="font-size:22px;font-weight: 500;padding-top: 30px;padding-bottom: 20px;text-align: center;line-height: 26px;">
                        Client</td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="font-size:24px;padding-top: 20px;padding-bottom: 20px;text-align: center;line-height: 26px;font-weight: 400;">
                        {{ $survey->firstname }} {{ $survey->lastname }}</td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="font-size:22px;padding-top: 20px;padding-bottom: 20px;text-align: center;line-height: 26px;font-weight: 500;">
                        Site Address</td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="font-size:18px;padding-bottom: 20px;text-align: center;line-height: 26px;font-weight: 300;">
                        {{ getCustomerAddress($survey->customer_id) }}</td>
                </tr>

            </tbody>

        </table>

        <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;margin-top: 50px;">
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 24px;text-align: center;">Contents</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 20%;">Page
                        1</td>
                    <td
                        style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 50%;text-align: center;padding-right: 15px;">
                        ...........................................................................................................
                    </td>
                    <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 30%;">
                        Client Details</td>
                </tr>
                <tr>
                    <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 20%;">Page
                        2</td>
                    <td
                        style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 50%;text-align: center;padding-right: 15px;">
                        ........................................................................................................
                    </td>
                    <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 30%;">Cable
                        schedule</td>
                </tr>
                <tr>
                    <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 20%;">Page
                        3</td>
                    <td
                        style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 50%;text-align: center;padding-right: 15px;">
                        ..........................................................................................................
                    </td>
                    <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 30%;">
                        Contact information</td>
                </tr>
                <tr>
                    <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 20%;">Page
                        4</td>
                    <td
                        style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 50%;text-align: center;padding-right: 15px;">
                        ...........................................................................................................
                    </td>
                    <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 30%;">
                        Technical information</td>
                </tr>


            </tbody>

        </table>

        <table border="0" cellspacing="0" cellpadding="0" class="table"
            style="width:100%;margin-top: 140px;margin-bottom: 0px;">
            <tbody>

                <tr>
                    <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 1</td>
                    <td style="color: #f17500;">Client: <b>{{ $survey->firstname }}
                            {{ $survey->lastname }}</b><br>{{ getCustomerAddress($survey->customer_id) }} </td>
                </tr>
            </tbody>

        </table>
        <div class="page-break"></div>


        <!--Page-2-->
        @foreach ($survey->cables as $cable)
            <table style="width:100%;border-bottom: 1px dashed #f17500;padding-bottom: 10px;padding-top: 10px;"
                border="0" cellspacing="0" cellpadding="0" class="table">
                <thead>
                    <tr>
                        <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img
                                src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                                alt="logo" style="width: 90px;"></th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;">
                            <b>From</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;">
                            <b>:</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">
                            {{ $cable->from }}</td>

                    </tr>
                    <tr>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;">
                            <b>To</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;">
                            <b>:</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">
                            {{ $cable->to }}</td>

                    </tr>
                    <tr>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;">
                            <b>Quantity</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;">
                            <b>:</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">
                            {{ $cable->quantity }}</td>

                    </tr>
                    <tr>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;">
                            <b>Cable Type</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;">
                            <b>:</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">
                            {{ $cable->type }}</td>

                    </tr>
                    <tr>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;">
                            <b>Terminate</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;">
                            <b>:</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">
                            {{ $cable->terminate }}</td>

                    </tr>
                    <tr>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;">
                            <b>Notes</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;">
                            <b>:</b></td>
                        <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">
                            {{ $cable->note }}</td>
                    </tr>

                    <tr>
                        <td colspan="3"
                            style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;text-align: right;">
                            <b>No.{{ $loop->iteration }} Completed</b><br><input class="form-check-input"
                                type="checkbox" style="width:22px;height:22px;" disabled></td>


                    </tr>
                </tbody>

            </table>
        @endforeach


        <table border="0" cellspacing="0" cellpadding="0" class="table"
            style="width:100%;margin-top: 40px;margin-bottom: 50px;">
            <tbody>

                <tr>
                    <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 2</td>
                    <td style="color: #f17500;">Client: <b>{{ $survey->firstname }}
                            {{ $survey->lastname }}</b><br>{{ getCustomerAddress($survey->customer_id) }} </td>
                </tr>
            </tbody>

        </table>


        <div class="page-break"></div>


        <!--Page-3-->

        <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0"
            cellpadding="0" class="table">
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo" style="width: 90px;"></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 40px;">
                        <b>Contact Information</b></td>

                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;">
                        <b>Client</b></td>

                </tr>

                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Name</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        {{ $survey->firstname }} {{ $survey->lastname }}</td>

                </tr>
                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Phone</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        @isset($survey->mobile_1)
                            {{ $survey->mobile_1 }}
                            @endisset @isset($survey->phone)
                            , {{ $survey->phone }}
                            @endisset @isset($survey->mobile_2)
                            , {{ $survey->mobile_2 }}
                        @endisset
                    </td>
                </tr>
                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Email</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        {{ $survey->email }}</td>

                </tr>

            </tbody>

        </table>

        <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0"
            cellpadding="0" class="table">

            <tbody>


                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;">
                        <b>Electrical Contractor</b></td>

                </tr>

                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Name</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        {{ $survey->electrical_contractor }}</td>

                </tr>
                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Phone</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        {{ $survey->electrical_contractor_phone }}</td>

                </tr>
                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Email</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        {{ $survey->electrical_contractor_email }}</td>

                </tr>

            </tbody>

        </table>

        <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0"
            cellpadding="0" class="table">

            <tbody>


                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;">
                        <b>Building Contractor</b></td>

                </tr>

                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Name</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        {{ $survey->building_contractor }}</td>

                </tr>
                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Phone</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        {{ $survey->building_contractor_phone }}</td>

                </tr>
                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">
                        Email</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">
                        {{ $survey->building_contractor_email }}</td>

                </tr>

            </tbody>

        </table>

        <table style="width:100%;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">

            <tbody>


                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;">
                        <b>Daltontv.ie</b></td>

                </tr>

                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 22px;">
                        Name</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 22px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 22px;">
                        {{ $company->company }}</td>

                </tr>
                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 22px;">
                        Phone</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 22px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 22px;">
                        {{ $company->mobile }}, {{ $company->landline }}</td>

                </tr>
                <tr>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 22px;">
                        Email</td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 22px;">
                        <b>:</b></td>
                    <td
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 22px;">
                        {{ $company->email }}</td>

                </tr>

            </tbody>

        </table>

        <table border="0" cellspacing="0" cellpadding="0" class="table"
            style="width:100%;margin-top: 210px;margin-bottom: 50px;">
            <tbody>

                <tr>
                    <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 3</td>
                    <td style="color: #f17500;">Client: <b>{{ $survey->firstname }}
                            {{ $survey->lastname }}</b><br>{{ getCustomerAddress($survey->customer_id) }} </td>
                </tr>
            </tbody>

        </table>
        <div class="page-break"></div>
        <!--Page-4-->

        <table style="width:100%;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo" style="width: 90px;"></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 20px;">
                        <b>Antennas</b></td>

                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;">
                        <b>Satellite Dish Location</b></td>

                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 10px;">
                        {{ $survey->dish_location }}</td>
                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;padding-top: 10px;">
                        <b>Saorview Aerial Location</b></td>

                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 10px;">
                        {{ $survey->saorview_location }}</td>
                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;padding-top: 10px;">
                        <b>Mobile Phone Repeater Aerial</b></td>

                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 10px;">
                        {{ $survey->repeater_location }}</td>
                </tr>


            </tbody>

        </table>

        <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0"
            cellpadding="0" class="table">

            <tbody>
                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 20px;">
                        <b>Technical Notes</b></td>

                </tr>
                @if (in_array('TV Socket', $survey->item))
                    <tr>
                        <td colspan="3"
                            style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 15px;">
                            {{ $survey->tvsocketfield }}
                        </td>
                    </tr>
                @endif

                @if (in_array('HDMI', $survey->item))
                    <tr>
                        <td colspan="3"
                            style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 15px;">
                            {{ $survey->hdmifield }}
                        </td>
                    </tr>
                @endif

                @if (in_array('Ceiling Speakers', $survey->item))
                    <tr>
                        <td colspan="3"
                            style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 15px;">
                            {{ $survey->ceilingspeakersfield }}
                        </td>
                    </tr>
                @endif

                @if (in_array('Electrical sockets', $survey->item))
                    <tr>
                        <td colspan="3"
                            style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 15px;">
                            {{ $survey->electricalsocketfield }}
                        </td>
                    </tr>
                @endif

                @if (in_array('CAT5/6', $survey->item))
                    <tr>
                        <td colspan="3"
                            style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 15px;">
                            {{ $survey->cat56field }}
                        </td>
                    </tr>
                @endif

                @if (in_array('Wall Mounted TVs', $survey->item))
                    <tr>
                        <td colspan="3"
                            style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 15px;">
                            {{ $survey->wallmountedtvfield }}
                        </td>
                    </tr>
                @endif

                @if (in_array('MPR', $survey->item))
                    <tr>
                        <td colspan="3"
                            style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 20px;">
                            {{ $survey->mprfield }}
                        </td>
                    </tr>
                @endif

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;">
                        <b>General Notes</b></td>
                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 20px;padding-top: 20px;">
                        {{ $survey->notes_general }}</td>
                </tr>


            </tbody>

        </table>

        <table border="0" cellspacing="0" cellpadding="0" class="table"
            style="width:100%;margin-top: 120px;margin-bottom: 50px;">
            <tbody>

                <tr>
                    <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 4</td>
                    <td style="color: #f17500;">Client: <b>{{ $survey->firstname }}
                            {{ $survey->lastname }}</b><br>{{ getCustomerAddress($survey->customer_id) }} </td>
                </tr>
            </tbody>

        </table>

        <div class="page-break"></div>
        <!--Page-5-->

        <table style="width:100%;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo" style="width: 90px;"></th>
                </tr>
            </thead>
        </table>

        <table style="width:100%; border: 1px solid #000;margin-top: 50px;border-collapse: collapse;" class="table">
            <tr>
                <th
                    style="background-color: #000;color: #fff;line-height: 36px;padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;">
                    Telecom Pole</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Telecom Pole', $survey->isp) ? 'I am interested in Telecom Pole' : '' }}
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
        </table>

        <table style="width:100%; border: 1px solid #000;margin-top: 50px;border-collapse: collapse;" class="table">
            <tr>
                <th
                    style="background-color: #000;color: #fff;line-height: 36px;padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;">
                    ESB Pole</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('ESB Pole', $survey->isp) ? 'I am interested in ESB Pole' : '' }}
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
        </table>


        <table style="width:100%; border: 1px solid #000;margin-top: 50px;border-collapse: collapse;" class="table">
            <tr>
                <th
                    style="background-color: #000;color: #fff;line-height: 36px;padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;">
                    Virgin Media</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Virgin Media', $survey->isp) ? 'I am interested in Virgin Media' : '' }}
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
        </table>

        <table border="0" cellspacing="0" cellpadding="0" class="table"
            style="width:100%;margin-top: 120px;margin-bottom: 50px;">
            <tbody>

                <tr>
                    <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 5</td>
                    <td style="color: #f17500;">Client: <b>{{ $survey->firstname }}
                            {{ $survey->lastname }}</b><br>{{ getCustomerAddress($survey->customer_id) }} </td>
                </tr>
            </tbody>

        </table>

        <div class="page-break"></div>
        <!--Page-6-->

        <table style="width:100%;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo" style="width: 90px;"></th>
                </tr>
            </thead>
        </table>

        <table style="width:100%; border: 1px solid #000;margin-top: 50px;border-collapse: collapse;" class="table">
            <tr>
                <th
                    style="background-color: #000;color: #fff;line-height: 36px;padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;">
                    Wireless Operator</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Wireless Operator', $survey->isp) ? 'I am interested in Wireless Operator' : '' }}
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
        </table>



        <table style="width:100%; border: 1px solid #000;margin-top: 50px;border-collapse: collapse;" class="table">
            <tr>
                <th
                    style="background-color: #000;color: #fff;line-height: 36px;padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;">
                    Other ISP</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Other', $survey->isp) ? 'I am interested in Other ISP' : '' }}
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
        </table>


        <table border="0" cellspacing="0" cellpadding="0" class="table"
            style="width:100%;margin-top: 350px;margin-bottom: 50px;">
            <tbody>

                <tr>
                    <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 6</td>
                    <td style="color: #f17500;">Client: <b>{{ $survey->firstname }}
                            {{ $survey->lastname }}</b><br>{{ getCustomerAddress($survey->customer_id) }} </td>
                </tr>
            </tbody>

        </table>

        <div class="page-break"></div>
        <!--Page-7-->

        <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0"
            cellpadding="0" class="table">
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo" style="width: 90px;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 20px;">
                        <b>Disclaimer</b></td>

                </tr>

                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 22px;padding-top: 20px;">
                        The information contained in this document is for general guidance on matters of interest only.
                        While we have made
                        every attempt to ensure that the information contained in this report has been obtained from
                        reliable sources,
                        Daltontv.ie is not responsible for any errors or omissions, or for the results obtained from the
                        use of this
                        information. All information in this report is provided "as is", with no guarantee of
                        completeness, accuracy,
                        timeliness or of the results obtained from the use of this information, and without warranty of
                        any kind, express or
                        implied, including, but not limited to warranties of performance, merchantability and fitness
                        for a particular
                        purpose.
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 22px;padding-top: 30px;">
                        Appit Limited T/A Daltontv.ie<br>Registered in Ireland 494287</td>
                </tr>
                <tr>
                    <td colspan="3" style="padding-left: 15px;padding-right:15px;padding-top: 5px;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo"></td>
                </tr>


            </tbody>

        </table>



        <table border="0" cellspacing="0" cellpadding="0" class="table"
            style="width:100%;margin-top: 350px;margin-bottom: 50px;">
            <tbody>

                <tr>
                    <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 7</td>
                    <td style="color: #f17500;">Client: <b>{{ $survey->firstname }}
                            {{ $survey->lastname }}</b><br>{{ getCustomerAddress($survey->customer_id) }} </td>
                </tr>
            </tbody>

        </table>


    </div>

</body>

</html>
