<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Reset</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

  <table style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <tr>
      <td>
      
        <h2 style="text-align: center; margin-bottom: 30px;">Password Reset</h2>
        <p>Hello,</p>
        <p>You have requested to reset your password. Please click the button below to reset your password.</p>
        <table style="margin: 30px auto; text-align: center;">
          <tr>
            <td>
              <a href="{{ route('forget.password.form', ['token' => $token]) }}" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Reset Password</a>
            </td>
          </tr>
        </table>
        <p>If you did not request a password reset, you can ignore this email.</p>
        <p>Thank you!</p>
      </td>
    </tr>
  </table>

</body>

</html>
