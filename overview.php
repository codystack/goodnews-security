<?php
include "./components/header.php";
include "./components/topnavbar.php";
?>
        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="mb-3 mb-lg-0">
                                <h1 class="mb-2 h2 fw-bold">Hey Don Tee,</h1>
                                <h5 class="text-dark mt-0 lead" id="greet"></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Investment</h6>
                                    <h2 class="mb-0"><span class="smart">USDT</span>12,000</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Profits</h6>
                                    <h2 class="mb-0"><span class="smart">USDT</span>2,000</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Site Visitors</h6>
                                    <h2 class="mb-0">2,893</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-gradient-info text-white text-center card-shadow-info">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Refferals</h6>
                                    <h2 class="mb-0">105</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row grid-margin">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-primary">Most Recent Investment</h4>
                                    <div class="table-responsive">
                                        <table id="recent-investment" class="table">
                                            <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>David Grey</td>
                                                    <td>demo@gmail.com</td>
                                                    <td>$500</td>
                                                </tr>
                                            
                                            <tr>
                                                <td>2</td>
                                                <td>Stella Johnson</td>
                                                <td>testemail@yahoo.com</td>
                                                <td>$1,500</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Marina Michel</td>
                                                <td>test@yahoo.com</td>
                                                <td>$100</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>John Doe</td>
                                                <td>testemail@gmail.com</td>
                                                <td>$350</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Peter Dobrick</td>
                                                <td>test@gmail.com</td>
                                                <td>$2,000</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php include "./components/footer.php"; ?>