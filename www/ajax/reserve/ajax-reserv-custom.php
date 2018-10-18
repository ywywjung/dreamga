<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button> -->
            <h4 class="modal-title" id="reservRegModalLabel">고객정보 보기</h4>
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
                                    <select class="form-control" name="jisa_cd(fk)">
                                        <option value="sort01">서울지사</option>
                                        <option value="sort02">....</option>
                                        <option value="sort03">....</option>
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
                                <label class="col-md-4 control-label">* 직급</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="mnger_jobgrd">
                                        <option value="service01">드림</option>
                                        <option value="service02">골드</option>
                                        <option value="service03">로얄</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 관리사명</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_name" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-user "></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 생년월일</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_birth_dt" class="datepicker form-control" id="birthDate" placeholder="생년월일">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">전화번호</label>
                                <div class="col-md-8">
                                    <input type="tel" name="mnger_telno" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-phone"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 휴대폰번호</label>
                                <div class="col-md-8">
                                    <input type="tel" name="mnger_mobile" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-mobile"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 입사일</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_ency_dt" class="datepicker form-control" id="birthDate" placeholder="입사일">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 퇴사일</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_retire_dt" class="datepicker form-control" id="birthDate" placeholder="퇴사일">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">진급일</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_lvl_dt" class="datepicker form-control" id="birthDate" placeholder="생년월일">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
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
                                    <section class="col-md-7">
                                        <input type="text" name="mnger_email01" class="form-control">
                                        <label class="input"><i class="icon-append fa fa-envelope-o"></i></label>
                                    </section>
                                    <section class="col col-md-5">
                                        <select class="form-control" name="mnger_email02">
                                            <option value="mail01">naver.com</option>
                                            <option value="mail02">naver.com</option>
                                        </select>
                                    </section>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">계좌번호</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_bnkac" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-list-alt"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">연회비납부일</label>
                                <div class="col-md-8">
                                    <input type="text" name="mnger_party_exps" class="datepicker form-control" id="birthDate">
								    <label class="input"><i class="icon-append fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">4대보험가입여부</label>
                                <div class="col-md-8 inline-group">
                                    <label class="radio">
                                        <input type="radio" name="mnger_bac_insr" class="radiobox">
                                        <span>초산</span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="mnger_bac_insr" class="radiobox">
                                        <span>경산</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">배상책임보험가입여부</label>
                                <div class="col-md-8 inline-group">
                                    <label class="radio">
                                        <input type="radio" name="mnger_res_insr" class="radiobox">
                                        <span>초산</span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="mnger_res_insr" class="radiobox">
                                        <span>경산</span>
                                    </label>
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



