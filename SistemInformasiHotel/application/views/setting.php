<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form method="POST" action="<?php echo base_url('Home/ganti') ?>" oninput='repassword.setCustomValidity(repassword.value != password.value ? "Passwords do not match." : "")'>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Setting</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input value="<?php echo $_SESSION['name'] ?>" type="text" name="nama" pattern="[A-Za-z\s]{1,}" oninvalid="this.setCustomValidity('Nama tidak valid, angka tidak boleh masuk')" oninput="setCustomValidity('')" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name=password pattern=".{6,}" oninvalid="this.setCustomValidity('Password harus 6 karakter atau lebih')" oninput="setCustomValidity('')" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Re-Enter Password</label>
                                <input type="password" pattern=".{6,}" oninvalid="this.setCustomValidity('Password harus 6 karakter atau lebih')" oninput="setCustomValidity('')" name=repassword class="form-control" id="exampleInputPassword1" placeholder="Re-enter Password" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>