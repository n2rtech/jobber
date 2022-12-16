<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">


    <style type="text/css">
      body{
          font-family: 'Roboto', sans-serif;
      }
    </style>
  </head>
  <body>

    <div class="invoice" style="max-width: 1000px;margin: 0 auto;">
      <!--Page-1-->
      <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;">
        <thead>
          <tr>
            <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png" alt="logo" style="width: 90px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3" style="text-align: center;"><img src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png" alt="logo"></td>
          </tr>
          <tr>
            <td colspan="3" style="font-size:28px;font-weight: 500;padding-top: 30px;padding-bottom: 20px;text-align: center;line-height: 43px;">TV-Home Entertainment-Wi-Fi-Multi Room Music-Data Cabling Layout</td>
          </tr>
          <tr>
              <td colspan="3" style="font-size:22px;font-weight: 500;padding-top: 30px;padding-bottom: 20px;text-align: center;line-height: 26px;">Client</td>
          </tr>
          <tr>
              <td colspan="3" style="font-size:24px;padding-top: 20px;padding-bottom: 20px;text-align: center;line-height: 26px;font-weight: 400;">{{ $customer->name }}</td>
          </tr>
          <tr>
              <td colspan="3" style="font-size:22px;padding-top: 20px;padding-bottom: 20px;text-align: center;line-height: 26px;font-weight: 500;">Site Address</td>
          </tr>
          <tr>
              <td colspan="3" style="font-size:18px;padding-bottom: 20px;text-align: center;line-height: 26px;font-weight: 300;">{{ getCustomerAddress($customer->id) }}</td>
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
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 20%;">Page   1</td>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 50%;text-align: center;padding-right: 15px;">...........................................................................................................</td>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 30%;">Client Details</td>
          </tr>
          <tr>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 20%;">Page   2</td>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 50%;text-align: center;padding-right: 15px;">........................................................................................................</td>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 30%;">Cable schedule</td>
          </tr>
          <tr>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 20%;">Page   3</td>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 50%;text-align: center;padding-right: 15px;">..........................................................................................................</td>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 30%;">Contact information</td>
          </tr>
          <tr>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 20%;">Page   4</td>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 50%;text-align: center;padding-right: 15px;">...........................................................................................................</td>
            <td style="font-size:15px;font-weight: 300;padding-top: 10px;padding-bottom: 10px;width: 30%;">Technical information</td>
          </tr>


        </tbody>

      </table>

      <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;margin-top: 140px;margin-bottom: 0px;">
        <tbody>

          <tr>
            <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 1</td>
            <td style="color: #f17500;">Client: <b>{{ $customer->name }}</b><br>{{ getCustomerAddress($customer->id) }} </td>
          </tr>
        </tbody>

      </table>


      <!--Page-2-->
      @foreach($request['cable'] as $value)
      <table style="width:100%;border-bottom: 1px dashed #f17500;padding-bottom: 10px;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">
        <thead>
          <tr>
            <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png" alt="logo" style="width: 90px;"></th>
          </tr>
        </thead>

        <tbody>

        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;"><b>From</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">{{ $value['from'] }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;"><b>To</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">{{ $value['to'] }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;"><b>Quantity</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">{{ $value['quantity'] }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;"><b>Cable Type</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">{{ $value['type'] }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;"><b>Terminate</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">{{ $value['terminate'] }}</td>

        </tr>
         <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;"><b>Notes</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;">{{ $value['note'] }}</td>
        </tr>

         <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;text-align: right;"><b>No.{{ $loop->iteration }} Completed</b><br><input class="form-check-input" type="checkbox" style="width:22px;height:22px;" disabled></td>


        </tr>
        </tbody>

      </table>
      @endforeach


      <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;margin-top: 40px;margin-bottom: 50px;">
        <tbody>

          <tr>
            <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 2</td>
            <td style="color: #f17500;">Client: <b>{{ $customer->name }}</b><br>{{ getCustomerAddress($customer->id) }} </td>
          </tr>
        </tbody>

      </table>





      <!--Page-3-->

      <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">
        <thead>
          <tr>
            <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png" alt="logo" style="width: 90px;"></th>
          </tr>
        </thead>

        <tbody>
         <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 40px;"><b>Contact Information</b></td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;"><b>Client</b></td>

        </tr>

        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Name</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">{{ $customer->name }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Phone</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">@isset($customer->mobile_1) {{ $customer->mobile_1 }} @endisset @isset($customer->phone), {{ $customer->phone }} @endisset @isset($customer->mobile_2), {{ $customer->mobile_2 }} @endisset</td>
        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Email</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">{{ $customer->email }}</td>

        </tr>

        </tbody>

      </table>

      <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">

        <tbody>


        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;"><b>Electrical Contractor</b></td>

        </tr>

        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Name</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">{{ $request['electrical_contractor'] }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Phone</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">{{ $request['phone_electrical_contractor'] }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Email</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">{{ $request['email_electrical_contractor'] }}</td>

        </tr>

        </tbody>

      </table>

      <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">

        <tbody>


        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;"><b>Building Contractor</b></td>

        </tr>

        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Name</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">{{ $request['building_contractor'] }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Phone</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">{{ $request['phone_building_contractor'] }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 20px;">Email</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 20px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 20px;">{{ $request['email_building_contractor'] }}</td>

        </tr>

        </tbody>

      </table>

      <table style="width:100%;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">

        <tbody>


        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;"><b>Daltontv.ie</b></td>

        </tr>

        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 22px;">Name</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 22px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 22px;">{{ $company->company }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 22px;">Phone</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 22px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 22px;">{{ $company->mobile }}, {{ $company->landline }}</td>

        </tr>
        <tr>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 15%;line-height: 22px;">Email</td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 10%;line-height: 22px;"><b>:</b></td>
          <td style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;width: 75%;line-height: 22px;">{{ $company->email }}</td>

        </tr>

        </tbody>

      </table>

      <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;margin-top: 210px;margin-bottom: 50px;">
        <tbody>

          <tr>
            <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page | 3</td>
            <td style="color: #f17500;">Client: <b>{{ $customer->name }}</b><br>{{ getCustomerAddress($customer->id) }} </td>
          </tr>
        </tbody>

      </table>

      <!--Page-4-->

      <table style="width:100%;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">
        <thead>
          <tr>
            <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png" alt="logo" style="width: 90px;"></th>
          </tr>
        </thead>

        <tbody>
         <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 20px;"><b>Antennas</b></td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;"><b>Satellite Dish Location</b></td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 10px;">{{ $request['dish_location'] }}</td>
        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;padding-top: 30px;"><b>Saorview Aerial Location</b></td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 10px;">{{ $request['saorview_location'] }}</td>
        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 5px;padding-top: 30px;"><b>Mobile Phone Repeater Aerial</b></td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 10px;">{{ $request['repeater_location'] }}</td>
        </tr>


        </tbody>

      </table>

      <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">

        <tbody>
         <tr>
            <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 20px;"><b>Technical Notes</b></td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 20px;">TV outlet socket should be F Type NON isolated to allow DC voltage pass.</td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 22px;padding-bottom: 20px;">HDMI socket boxes should be 40 mm deep. HDMI cable plug ends should be protected. </td>
        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;padding-bottom: 20px;">All CAT 5/6 cables should be labeled and terminated at both ends and tested. </td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 22px;padding-bottom: 20px;">Confirm height of socket outlets for wall mounted TVs with client. Wall mounted TVs may also require HDMI cables to be installed.</td>
        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 22px;padding-top: 40px;">Electrical socket required in attic. One also required in utility at TV cabinet.</td>
        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 20px;padding-top: 30px;"><b>General Notes</b></td>
        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 22px;padding-top: 20px;">{{ $request['notes_general'] }}</td>
        </tr>


        </tbody>

      </table>



      <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;margin-top: 120px;margin-bottom: 50px;">
        <tbody>

          <tr>
            <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page |  4</td>
            <td style="color: #f17500;">Client: <b>{{ $customer->name }}</b><br>{{ getCustomerAddress($customer->id) }} </td>
          </tr>
        </tbody>

      </table>

      <table style="width:100%;padding-bottom: 30px;padding-top: 10px;" border="0" cellspacing="0" cellpadding="0" class="table">
        <thead>
          <tr>
            <th colspan="3" style="font-size: 30px;text-decoration: underline;text-align: right;"><img src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png" alt="logo" style="width: 90px;"></th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;text-decoration: underline;padding-bottom: 20px;"><b>Disclaimer</b></td>

        </tr>

        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 22px;padding-top: 20px;">The information contained in this document is for general guidance on matters of interest only. While we have made
          every attempt to ensure that the information contained in this report has been obtained from reliable sources,
          Daltontv.ie is not responsible for any errors or omissions, or for the results obtained from the use of this
          information. All information in this report is provided "as is", with no guarantee of completeness, accuracy,
          timeliness or of the results obtained from the use of this information, and without warranty of any kind, express or
          implied, including, but not limited to warranties of performance, merchantability and fitness for a particular
          purpose.
          </td>
        </tr>
        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right: 15px;text-align: left;font-size: 16px;line-height: 22px;padding-top: 30px;">Appit Limited T/A Daltontv.ie<br>Registered in Ireland 494287</td>
        </tr>
        <tr>
          <td colspan="3" style="padding-left: 15px;padding-right:15px;padding-top: 5px;"><img src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png" alt="logo"></td>
        </tr>


        </tbody>

      </table>



      <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;margin-top: 350px;margin-bottom: 50px;">
        <tbody>

          <tr>
            <td style="vertical-align: top;letter-spacing: 4px;color: #f17500;font-size: 17px;">Page |  5</td>
            <td style="color: #f17500;">Client: <b>{{ $customer->name }}</b><br>{{ getCustomerAddress($customer->id) }} </td>
          </tr>
        </tbody>

      </table>


    </div>

  </body>
</html>
