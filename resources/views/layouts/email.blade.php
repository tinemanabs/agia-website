<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
</head>

<body style="background-color: #F5F8FA; font-family:Arial, Helvetica, sans-serif; margin:0; padding:0; color: #343a40;">

    <header>
        <div class="logo" style="padding: 20px">
            <a href="{{ url('/') }}" target="_blank">
                <img src="{{ $message->embed('img/agia-logo-2020.png') }}" alt="logo" srcset=""
                    width="100" style="  display: block; margin-left: auto; margin-right: auto;"></a>
        </div>
    </header>

    <div style="padding:0px 30px 30px;">

        <div class="card-body" style="max-width: 550px; margin-right:auto; margin-left:auto;">
            <table style="text-align:center; margin-right:auto; margin-left:auto; border-spacing:0px;">

                <!-- Content -->
                @yield('content')
                <!-- End of Content -->

                <!-- Footer -->
                <tr>
                    <td style="background-color: #fff; padding: 30px 30px 20px; ">

                        <p
                            style=" font-size: 12px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:center;">
                            Copyright &copy; Association of Government Internal Auditors, Inc. All Rights Reserved <br>
                            <a href="https://www.google.com/maps/search/?api=1&query=association%of%government%internal Auditors"
                                target="_blank" style="text-decoration:none;">Unit 402 Merchant Square Condominium, 1386
                                E. Rodriguez Sr. Avenue Cor. Mabolo St. New Manila, Quezon City</a>
                        </p>
                    </td>
                </tr>
                <!-- End of Footer -->
            </table>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
