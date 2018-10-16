<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button> -->
            <h4 class="modal-title" id="memberRegModalLabel">회원등록</h4>
        </div>
        <div class="modal-body custom-scroll terms-body">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <form action="../../php/demo-register.php" id="smart-form-register" class="smart-form client-form">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 회원구분</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="user_jobgrd">
                                        <option value="sort01">관리자</option>
                                        <option value="sort02">일반</option>
                                        <option value="sort03">직원</option>
                                        <option value="sort04">지사장</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 아이디</label>
                                <div class="col-md-8">
                                    <section class="col-md-7">
                                        <input type="text" name="user_id" class="form-control">
                                        <label class="input"><i class="icon-append fa fa-user"></i></label>
                                    </section>
                                    <section class="col-md-push-1">
                                        <button type="button" id="ovlpChk" class="btn btn-primary btn-sm col-md-4">중복확인</button>
                                    </section>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 비밀번호</label>
                                <div class="col-md-8">
                                    <input type="password" name="user_pwd" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-lock"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 비밀번호확인</label>
                                <div class="col-md-8">
                                    <input type="password" name="userPwChk" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-lock"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 회원명 (이름)</label>
                                <div class="col-md-8">
                                    <input type="text" name="user_name" id="user_name" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-user"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 생년월일</label>
                                <div class="col-md-8">
                                    <input type="text" name="user_birth_dt" class="datepicker form-control" id="birthDate" placeholder="생년월일">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">전화번호</label>
                                <div class="col-md-8">
                                    <input type="tel" name="user_telno" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-phone"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 휴대폰번호</label>
                                <div class="col-md-8">
                                    <input type="tel" name="user_mobile" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-mobile"></i></label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">주소</label>
                                <div class="col-md-8">
                                    <section class="col-md-7">
                                        <input type="text" id="user_zip_cd" name="user_zip_cd" class="form-control" placeholder="우편번호">
                                    </section>
                                    <section class="col-md-push-1">
                                        <button type="button" class="btn btn-primary btn-sm col-md-4" id="daumPost" onclick="execDaumPostcode()">우편번호</button>
                                    </section>
                                    <input type="text" name="user_addr01" id="user_addr01" class="form-control" placeholder="주소">
                                    <input type="text" name="user_addr02" id="user_addr02" class="form-control" placeholder="상세주소">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">이메일</label>
                                <div class="col-md-8">
                                    <section class="col-md-7">
                                        <input type="text" name="user_email01" class="form-control">
                                        <label class="input"><i class="icon-append fa fa-envelope-o"></i></label>
                                    </section>
                                    <section class="col col-md-5">
                                        <select class="form-control" name="user_email02">
                                            <option value="mail01">naver.com</option>
                                            <option value="mail02">naver.com</option>
                                        </select>
                                    </section>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 상태</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="user_jonn_St">
                                        <option value="con01">가입</option>
                                        <option value="con02">탈퇴</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">가입일</label>
                                <div class="col-md-8">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- end row -->
           
        </div>
        <div class="modal-footer">
                        <!--<button type="button" id="i-agree" onclick="$(this.form).submit()" class="btn btn-primary"><i class="fa fa-check"></i> 확인</button>-->
                        <button type="button" id="i-agree" class="btn btn-primary"><i class="fa fa-check"></i>확인</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i> 취소</button>
        </div>
        <!-- /.modal-footer -->
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->



