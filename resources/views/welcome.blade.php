<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ELJ - API BPD SuMBAR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <!-- <div class="container border border-dark">
        <div class="row no-gutters">
        <div class="col-lg-3">
        Kolom Kiri
        </div>
        <div class="col-lg-6">
        Kolom Tengah
        </div>
        <div class="col-lg-3">
        Kolom Kanan
        </div>    
        </div>
        
    </div> -->
    <div class="container-fluid">
        <div class="row">
        <div class="col text-center mt-3 mb-3">
            <h1><strong>Dokumentasi API PT ASURANSI EKA LLOYD JAYA V.1.0.0</strong></h1>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                Table of Content
            </div>  
            <div class="col-lg-7 bg-secondary text-white">
                <h1><strong><u>Pembukaan</u></strong></h1>
                <h3>
                Untuk mempercepat proses dan sebagai salah satu services untuk melayani mitra bisnis, Kami
                menyediakan API berikut.
                </h3>
                <h2>Tata cara Pemakaian</h2>
                <h3>Untuk <kbd>setiap request</kbd>, mohon menggunakan header berikut</h3>
                <code><h1><kbd>Headers</kbd></h1>
                </code>
            </div>            
            <div class="col-lg-3 bg-dark">
            </div>            
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-7 bg-secondary">
                <table class="table table-light">
                    <thead class="bg-dark text-white">
                    <tr>
                        <td scope="col"><strong>Header</strong></td>
                        <td scope="col"><strong>Value</strong></td>
                        <td scope="col"><strong>Definition</strong></td>
                    </tr>
                    </thead class="">
                    <tbody>
                    <tr >
                        <td scope="col">Content-Type</td>
                        <td scope="col">Application/json</td>
                        <td scope="col">Menidentifikasikan bahwa request yang diterima adalah dalam bentuk JSON</td>
                    </tr>
                    <tr>
                        <td scope="col">Accept</td>
                        <td scope="col">Application/json</td>
                        <td scope="col">Menandakan bahwa response yang diterima adalah dalam bentuk JSON</td>
                    </tr>
                    <tr>
                        <td scope="col">Authorization</td>
                        <td scope="col">Bearer <kbd>Token</kbd></td>
                        <td scope="col">Token yang digunakan untuk otorisasi setiap Request yang dikirimkan. <kbd>Token</kbd> didapatkan
                        dari server setelah melakukan login(Lihat bagian Route login)</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 bg-dark">
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-7 bg-info text-white">
                <h1><strong><u>Route/Endpoint</u></strong></h1>
            </div>
            <div class="col-lg-3 bg-dark">
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-7 bg-secondary">
                <ol class="text-white">
                    <li><h2><kbd class="bg-primary">Login/Access Token Request</kbd></h2></li>
                    <ul>
                        <li><h3><code>nagari.ekalloyd.id/api/auth/login</code></h3></li>
                    </ul>

            </div>
            <div class="col-lg-3 bg-dark text-dark">
                <div class="col">
                <code>
                <h3>Contoh request (dengan curl):</h3><br>
                curl -v -d '{"email":"coba@ekalloyd.com","password":"evrexg","remember_me":false}' -H "Content-Type:application/json" http://nagari.ekalloyd.id/api/auth/login
                <br><br>
                <h3>Contoh Response</h3>
                {"<kbd>access_token</kbd>":"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiNTkzZDMxYWYwZjA1YjZlYWM3MjU4N2VmYjc3NDNhZDRmYWQzYWFjMWRkYjVjYWJlZWVmMDBhYTI4MjFkMWY4NjcxOWE3ZDNlMjk0MzY3NjMiLCJpYXQiOjE1OTYwOTg1NzcsIm5iZiI6MTU5NjA5ODU3NywiZXhwIjoxNjI3NjM0NTc3LCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.DrPC5p1WX0pxXXvT6V-0JDwB-IWLiIDOF-sdGa0ex-yfyEIcj80TN_yWhX5x0OnLbAreGI6xmyhDKLsVEZWXCdoWLDCK29vvRRjvJjkAhG1JRdzUAV_Uw7Pbr5RykZP67-oVm3Wl5LVCKDDgOtwdLfrNphyK1KNseiHduNGaHKA0ghGiVnaaH856MTRWAiJm_5JLnFf7Bqep3menEiso_gnYsztqgEeQKYhXpCMVQNFvXaKY8t2KG76RdPxoBn3udkX7S13xYxLaybkPdc-74Z8mJOgef8yyGZjupm7_hPsWaEiCeqTTC_kEJ1Cg9h-NDHMDhBaQiye4yMDGCHmTou4G_Jzx6ut6F1qZA672-qreIJN0sRaVXQZ3sVozpeyq7uiKpgzOn-GeHaqdTPqcrhF9CPJgI4swC_pMgupYNWR_Mo_W3sjHbo-PfJTJs3lsYcLJ6C0_oQ_67Pi1uLUAHMejMBckil_tMN2OFRShCLrZ13tIouKJP-Zura8rZqrebg6DfXM35SF72XcjCeA15C9WJmRBmiusio2wL4BjEg7e75rx4hXUSetKBDfqXrgh6HER_ER6lw4j35j9JhVGL9ya1vmxFCDDbn4Au7LddxDP41gynPNHhjg3vTbH4RCgUDeM8KgNT8DM4sma906kMZT7dVr2Ab1pmR8Qb4-RuEQ",
                "token_type":"Bearer",
                "expires_at":"2020-07-30"}
                </code>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
