<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button> -->
            <h4 class="modal-title" id="freelancerModalLabel">관리사정보 보기</h4>
        </div>
        <div class="modal-body custom-scroll terms-body">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <form action="php/demo-register.php" id="smart-form-register" class="smart-form">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 지사</label>
                                <div class="col-md-8">
                                    <span class="form-control">서울지사</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 서비스</label>
                                <div class="col-md-8">
                                    <span class="form-control">산후조리사</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 직급</label>
                                <div class="col-md-8">
                                    <span class="form-control">드림</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 관리사명</label>
                                <div class="col-md-8">
                                    <span class="form-control">홍길동</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 생년월일</label>
                                <div class="col-md-8">
                                    <span class="form-control">2015.11.27</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">전화번호</label>
                                <div class="col-md-8">
                                    <span class="form-control">02.3016.0000</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 휴대폰번호</label>
                                <div class="col-md-8">
                                    <span class="form-control">010.3016.0000</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 입사일</label>
                                <div class="col-md-8">
                                    <span class="form-control">2015.11.27</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 퇴사일</label>
                                <div class="col-md-8">
                                    <span class="form-control">2015.11.27</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">진급일</label>
                                <div class="col-md-8">
                                    <span class="form-control">2018-01-01</span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                             <div class="form-group">
                                <label class="col-md-4 control-label">주소</label>
                                <div class="col-md-8">
                                    <section class="col-md-7">
                                        <input type="text" id="mnger_zip_cd" name="mnger_zip_cd" class="form-control" placeholder="우편번호">
                                    </section>
                                    <section class="col-md-push-1">
                                    <button type="button" class="btn btn-primary btn-sm col-md-4" onclick="execDaumPostcode()">우편번호</button>
                                    </section>
                                    <input type="text" name="mnger_addr01" id="mnger_addr01" class="form-control" placeholder="주소">
                                    <input type="text" name="mnger_addr02" id="mnger_addr02" class="form-control" placeholder="상세주소">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">이메일</label>
                                <div class="col-md-8">
                                    <span class="form-control">neomate@neomate.net</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">계좌번호</label>
                                <div class="col-md-8">
                                    <span class="form-control">국민은행 000000-00-000000</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">연회비납부일</label>
                                <div class="col-md-8">
                                    <span class="form-control">2018-01-01</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">4대보험가입여부</label>
                                <div class="col-md-8">
                                    <span class="form-control">가입</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">배상책임보험가입여부</label>
                                <div class="col-md-8">
                                    <span class="form-control">미가입</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">건강관리</label>
                                <div class="col-md-8">
                                    <label class="">
                                        <input type="checkbox" name="mnger_hec_insr" class="checkbox style-0">
                                        <span>B형간염</span>
                                    </label>
                                    <label class="">
                                        <input type="checkbox" name="mnger_hec_insr" class="checkbox style-0">
                                        <span>독감</span>
                                    </label>
                                    <label class="">
                                        <input type="checkbox" name="mnger_hec_insr" class="checkbox style-0">
                                        <span>백일해</span>
                                    </label>
                                    <label class="">
                                        <input type="checkbox" name="mnger_hec_insr" class="checkbox style-0">
                                        <span>건강검진</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">메모</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="mnger_memo" rows="5"></textarea>
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



