<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button> -->
            <h4 class="modal-title" id="customerRegModalLabel">고객정보 등록</h4>
        </div>
        <div class="modal-body custom-scroll terms-body">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <form action="php/demo-register.php" id="smart-form-register" class="smart-form">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 지사</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="sort">
                                        <option value="sort01">서울지사</option>
                                        <option value="sort02">지사</option>
                                        <option value="sort03">지사</option>
                                        <option value="sort04">지사</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 서비스</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="service">
                                        <option value="service01">산후조리사</option>
                                        <option value="service02">베이비시터</option>
                                        <option value="service03">출장반찬</option>
                                        <option value="service04">기타</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 서비스기간</label>
                                <div class="col-md-8">
                                    <section class="col-md-6">
                                        <input type="text" name="startDate" class="datepicker hasDatepicker form-control" id="startDate" placeholder="시작일">
                                        <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                    </section>
                                    <section class="col col-md-6">
                                        <input type="text" name="finishDate" class="datepicker hasDatepicker form-control" id="finishDate" placeholder="종료일">
                                        <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                    </section>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 혜택</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="benefit">
                                        <option value="benefit01">바우처</option>
                                        <option value="benefit02">기타</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 관리사</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="manager">
                                        <option value="manager01">관리사1</option>
                                        <option value="manager02">관리사2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 고객명</label>
                                <div class="col-md-8">
                                    <input type="text" name="cust_name" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-user"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 생년월일</label>
                                <div class="col-md-8">
                                    <input type="text" name="cust_birth_dt" class="datepicker form-control" id="birthDate" placeholder="생년월일">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">전화번호</label>
                                <div class="col-md-8">
                                    <input type="tel" name="cust_telno" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-phone"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 휴대폰번호</label>
                                <div class="col-md-8">
                                    <input type="tel" name="cust_mobile" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-mobile"></i></label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">주소</label>
                                <div class="col-md-8">
                                    <section class="col-md-7">
                                        <input type="text" id="cust_zip_cd" name="cust_zip_cd" class="form-control" placeholder="우편번호">
                                    </section>
                                    <section class="col-md-push-1">
                                    <button type="button" class="btn btn-primary btn-sm col-md-4" onclick="execDaumPostcode()">우편번호</button>
                                    </section>
                                    <input type="text" name="cust_addr01" id="cust_addr01" class="form-control" placeholder="주소">
                                    <input type="text" name="cust_addr02" id="cust_addr02" class="form-control" placeholder="상세주소">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">이메일</label>
                                <div class="col-md-8">
                                    <section class="col-md-7">
                                        <input type="text" name="cust_email01" class="form-control">
                                        <label class="input"><i class="icon-append fa fa-envelope-o"></i></label>
                                    </section>
                                    <section class="col col-md-5">
                                        <select class="form-control" name="cust_email02">
                                            <option value="mail01">naver.com</option>
                                            <option value="mail02">naver.com</option>
                                        </select>
                                    </section>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">가족수</label>
                                <div class="col-md-8">
                                    <input type="text" name="cust_famc_nt" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-user"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">아기이름</label>
                                <div class="col-md-8">
                                    <input type="text" name="cust_baby_name" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-child"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">출산예정일</label>
                                <div class="col-md-8">
                                    <input type="text" name="cust_birth_due" class="datepicker form-control" id="babyDate">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">출산경험</label>
                                <div class="col-md-8 inline-group">
                                    <label class="radio">
                                        <input type="radio" name="radio-inline" class="radiobox">
                                        <span>초산</span>
                                    </label>
                                    <label class="radio col-md-3">
                                        <input type="radio" name="radio-inline" class="radiobox">
                                        <span>경산</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="born" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">메모</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="cust_memo" rows="5"></textarea>
                                    <label class="input"><i class="icon-append fa fa-comment"></i></label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- end row -->
        </div>
        <div class="modal-footer">
            <button type="button" id="i-agree" class="btn btn-primary"><i class="fa fa-check"></i> 확인</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i> 취소</button>
        </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->



