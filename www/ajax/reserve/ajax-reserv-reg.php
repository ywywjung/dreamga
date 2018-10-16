<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button> -->
            <h4 class="modal-title" id="reservRegModalLabel">예약정보 등록</h4>
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
                                    <select class="form-control" name="resv_jisa_cd">
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
                                    <select class="form-control" name="resv_svc_cd">
                                        <option value="service01">산후조리사</option>
                                        <option value="service02">베이비시터</option>
                                        <option value="service03">출장반찬</option>
                                        <option value="service04">기타</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 관리사</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="resv_ngr_cd">
                                        <option value="sort01">관리사</option>
                                        <option value="sort02">...</option>
                                        <option value="sort03">...</option>
                                        <option value="sort04">...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 고객</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="resv_cust_seq">
                                        <option value="sort01">황혜미 외</option>
                                        <option value="sort02">....</option>
                                        <option value="sort03">....</option>
                                        <option value="sort04">....</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 시작일</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_ency_dt" class="datepicker form-control" id="birthDate" placeholder="시작일">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 종료일</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_retire_dt" class="datepicker form-control" id="birthDate" placeholder="종료일">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">예약금입금일</label>
                                <div class="col-md-8">
                                    <input type="text" name="resv_recb_dt" class="datepicker form-control" id="birthDate">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">이용료</label>
                                    <div class="col-md-8">
                                        <input type="text" name="resv_exps" class="form-control">
                                        <label class="input"><i class="icon-append fa fa-database"></i></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-md-4 control-label">비용</label>
                                <div class="col-md-8">
                                    <input type="text" name="user_name" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-database"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">기타수당</label>
                                <div class="col-md-8">
                                    <input type="text" name="resv_etc_exps" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-database"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">예약금</label>
                                <div class="col-md-8">
                                    <input type="text" name="resv_resv_exps" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-database"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">잔액</label>
                                <div class="col-md-8">
                                    <input type="text" name="resv_bal_exps" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-database"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">숙식제공여부</label>
                                <div class="col-md-8 inline-group">
                                    <label class="radio">
                                        <input type="radio" name="resv_home_yn" class="radiobox">
                                        <span>제공</span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="resv_home_yn" class="radiobox">
                                        <span>미제공</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">메모</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="resv_memo" rows="5"></textarea>
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



