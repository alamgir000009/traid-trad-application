<!DOCTYPE html>
<html>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f4;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0"
                    style="background-color: #ffffff; margin: 20px auto; border-radius: 5px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);">
                    <tr>
                        <td style="padding: 20px; text-align:center">
                            <p style="font-size: 22px;font-weight:bold; color: #333; margin: 0 5px;">Subject: {{ $data['subject'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px;">
                            <p style="font-size: 22px; color: #333; margin: 0 5px;font-weight: bold !important;">Name: {{ $data['name'] }}</p>
                            <br>

                            <p style="font-size: 18px; color: #333; margin: 0 5px;">Email: {{ $data['email']}}</p>
                            <br>

                            <p style="font-size: 18px; color: #333; margin: 0 5px;">Contact: {{ $data['number']}}</p>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 20px;">
                            <p style="font-size: 18px; color: #333; margin: 0 5px;">{{ $data['message'] }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
