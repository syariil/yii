<!-- Main Sidebar Container -->
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header mx-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb"><ol id="w0" class="breadcrumb float-sm-right breadcrumb"><li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Request password reset</li>
                        </ol>
                    </nav>                
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- Main content -->
    <div class="content mx-4">
        <div class="site-request-password-reset">
            <h1>Request password reset</h1>
            <p>Please fill out your email. A link to reset password will be sent there.</p>
            <div class="row">
                <div class="col-lg-5">
                    <form id="request-password-reset-form" action="/site/request-password-reset" method="post">
                        <input type="hidden" name="_csrf-frontend" value="XikZ1iTqNpzyDumK4ul-JnvxRgodkcxAhuIK-h3KGyQ8RX25UokP_pN_vtylrBl2SLkcVVyhpgq_gTi4WpN3Zg==">
                        <div class="form-group field-passwordresetrequestform-email required">
                        <label for="passwordresetrequestform-email">Email</label>
                        <input type="text" id="passwordresetrequestform-email" class="form-control" name="PasswordResetRequestForm[email]" autofocus aria-required="true">
                        <div class="invalid-feedback"></div>
                    </form>        
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Send</button>                
                </div>
            </div>
        </div>
    </div><!-- /.content -->
</div><!-- /.content-wrapper -->