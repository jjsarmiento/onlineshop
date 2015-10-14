<!--USER MODAL-->
<form method="POST" action="<?=base_url()?>Main/login">
    <div class="modal fade" id="userModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hi <?=$_SESSION['firstname'].' '?> <?=$_SESSION['lastname']?></h4>
                </div>
                <div class="modal-body">
                    <a href="<?=base_url()?>Main/logout" class="btn btn-danger btn-block"><i class="fa fa-user"></i> Logout</a>
                </div>
                <!--                        <div class="modal-footer">-->
                <!--                            <button type="submit" class="btn btn-success">Login</button>-->
                <!--                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
                <!--                        </div>-->
            </div>
        </div>
    </div>
</form>
<!--        END USER MODAL-->
    </body>
</html>