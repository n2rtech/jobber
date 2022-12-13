<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Building a New Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">


    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <style> .page-break { page-break-after: always; } </style>
</head>

<body>

    <div class="invoice" style="max-width: 1000px;margin: 0 auto;">
        <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;">
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 30px;text-decoration: underline;">New Home Survey Form</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3" style="font-size:24px;font-weight: 500;padding-top: 30px;padding-bottom: 20px;">
                        {{ $banh->firstname }} {{ $banh->lastname }}</td>
                </tr>
                <tr>
                    <td style="text-align: left;width: 10%;" style="font-size: 18px;"><b>Phone</b></td>
                    <td style="text-align: left;width: 5%;font-size: 18px;"><b>:</b></td>
                    <td style="text-align: left; width: 85%; font-size: 18px;line-height: 40px;">
                        @isset($banh->mobile_1)
                            {{ $banh->mobile_1 }}
                            @endisset @isset($banh->phone)
                            , {{ $banh->phone }}
                        @endisset
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;width: 10%;" style="font-size: 18px;"><b>Address</b></td>
                    <td style="text-align: left;width: 5%;font-size: 18px;"><b>:</b></td>
                    <td style="text-align: left; width: 85%; font-size: 18px;line-height: 40px;">
                        {{ getBanhAddress($banh->id) }}</td>
                </tr>
                <tr>
                    <td style="text-align: left;width: 12%;" style="font-size: 18px;"><b>Order date</b></td>
                    <td style="text-align: left;width: 5%;font-size: 18px;"><b>:</b></td>
                    <td style="text-align: left; width: 83%; font-size: 18px;line-height: 40px;">{{ $banh->created_at }}
                    </td>
                </tr>

            </tbody>

        </table>


        <table style="width:100%; border: 1px solid #000;margin-top: 50px;border-collapse: collapse;" class="table">
            <tr>
                <th
                    style="background-color: #000;color: #fff;line-height: 36px;padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;">
                    Free to Air Saorview TV</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Free to Air Saorview TV', $banh->tv) ? 'I am interested in Free to Air Saorview TV ' : '' }}
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
                    FTA Satellite</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;font-weight: 500;">
                    {{ in_array('Free to Air Satellite TV', $banh->tv) ? 'I am interested in Free to Air Satellite TV ' : '' }}
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
                    Sky+ HD</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Sky+ HD', $banh->tv) ? 'I am interested in Sky+ HD ' : '' }}</td>

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
                    Sky Q</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Sky Q', $banh->tv) ? 'I am interested in Sky Q ' : '' }}</td>

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
                    Sky Multi Room</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Sky Multi Room', $banh->tv) ? 'I am interested in Sky Multi Room ' : '' }}</td>

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
                    Web TV</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Web TV', $banh->tv) ? 'I am interested in Web TV ' : '' }}</td>

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
                    Wall Mounted TV</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Wall Mounted TV\'s', $banh->tv) ? 'I am interested in Wall Mounted TV\'s ' : '' }}
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
                    Full Home Wi-FI</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Full Home Wi-FI', $banh->wifi) ? 'I am interested in Full Home Wi-FI ' : '' }}</td>

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
                    Wired data sockets & internal distribution</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Wired data sockets & internal distribution', $banh->wifi) ? 'I am interested in Wired data sockets & internal distribution' : '' }}
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
                    Detached Building</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('I need internet and Wi-Fi in a detached office or garage', $banh->wifi) ? 'I am interested in Internet and Wi-Fi in a detached office or garage' : '' }}
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
                    Ceiling mounted speakers</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Ceiling mounted speakers', $banh->multiroom_music) ? 'I am interested in Ceiling mounted speakers' : '' }}
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
                    Cabinet Speakers</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Stand alone cabinet speakers', $banh->multiroom_music) ? 'I am interested in Stand alone cabinet speakers' : '' }}
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
                    Outdoor Speakers</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Outdoor speakers for patio area', $banh->multiroom_music) ? 'I am interested in Outdoor speakers for patio area' : '' }}
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
                    TV Audio</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('TV sound through speakers', $banh->multiroom_music) ? 'I am interested in TV sound through speakers' : '' }}
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
                    Mobile Phone Repeater</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('Full home mobile coverage', $banh->mobile_phone_repeaters) ? 'I am interested in Full home mobile coverage' : '' }}
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
                    Detached Building</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ in_array('I need mobile phone coverage in a detached office or garage', $banh->mobile_phone_repeaters) ? 'I am interested in mobile phone coverage in a detached office or garage' : '' }}
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
                    MPR Info</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Coverage:
                    {{ in_array('Voice coverage only', $banh->mobile_phone_repeaters) ? 'I am interested in Voice coverage only' : '' }}
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Coverage:
                    {{ in_array('Voice and data coverage', $banh->mobile_phone_repeaters) ? 'I am interested in Voice and data coverage' : '' }}
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Mobile Operator: {{ $banh->mobile_operator }}</td>

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
                    Antenna Location</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Satellite Dish</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Saorview Aerial</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    MPR Ant</td>

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
                    Notes</th>
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
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
        </table>

        <div class="page-break"></div>

        <table style="width:100%; border: 1px solid #000;margin-top: 50px;border-collapse: collapse;" class="table">
            <tr>
                <th
                    style="background-color: #000;color: #fff;line-height: 36px;padding-left: 15px;padding-right: 15px;text-align: left;font-size: 18px;">
                    Client</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ $banh->firstname }} {{ $banh->lastname }}</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ getBanhAddress($banh->id) }}</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Phone : @isset($banh->mobile_1)
                    {{ $banh->mobile_1 }}
                    @endisset @isset($banh->phone)
                    , {{ $banh->phone }}
                @endisset</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Order date: {{ $banh->created_at }}</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ $banh->email }}</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Moving in on {{ $banh->move_in_date }}</td>

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
                    Building Info</th>
            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                </td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    {{ $banh->dwelling_type }}</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Area: {{ $banh->area }}</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Floor Type: {{ $banh->floor_type }}</td>

            </tr>
            <tr>
                <td
                    style="border: 1px solid #000;padding-left: 15px;padding-right: 15px;text-align: left;line-height: 30px;font-size: 16px;height: 30px;">
                    Wall Type: {{ $banh->wall_type }}</td>

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

    </div>

</body>

</html>
