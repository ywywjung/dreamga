<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button> -->
            <h4 class="modal-title" id="branchRegModalLabel">지사정보 등록</h4>
        </div>
        <div class="modal-body custom-scroll terms-body">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <form action="php/demo-register.php" id="smart-form-register" class="smart-form">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 지사구분</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="jisa_kind_cd">
                                        <option value="sort01">본사</option>
                                        <option value="sort02">지부</option>
                                        <option value="sort03">지사</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 지역</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="jisa_area_cd">
                                        <option value="service01">서울</option>
                                        <option value="service02">경기</option>
                                        <option value="service03">...</option>
                                        <option value="service04">...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 지사명</label>
                                <div class="col-md-8">
                                    <input type="text" name="jisa_area_nm" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-institution "></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 대표자</label>
                                <div class="col-md-8">
                                    <input type="text" name="jisa_repf" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-user"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">대표전화</label>
                                <div class="col-md-8">
                                    <input type="tel" name="jisa_repf_telno" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-phone"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 휴대폰번호</label>
                                <div class="col-md-8">
                                    <input type="tel" name="jisa_mobile" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-mobile"></i></label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                             <div class="form-group">
                                <label class="col-md-4 control-label">주소</label>
                                <div class="col-md-8">
                                    <section class="col-md-7">
                                        <input type="text" id="jisa_zip_cd" name="jisa_zip_cd" class="form-control" placeholder="우편번호">
                                    </section>
                                    <section class="col-md-push-1">
                                    <button type="button" class="btn btn-primary btn-sm col-md-4" onclick="execDaumPostcode()">우편번호</button>
                                    </section>
                                    <input type="text" name="jisa_addr01" id="jisa_addr01" class="form-control" placeholder="주소">
                                    <input type="text" name="jisa_addr02" id="jisa_addr02" class="form-control" placeholder="상세주소">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">이메일</label>
                                <div class="col-md-8">
                                    <section class="col-md-7">
                                        <input type="text" name="jisa_email01" class="form-control">
                                        <label class="input"><i class="icon-append fa fa-envelope-o"></i></label>
                                    </section>
                                    <section class="col col-md-5">
                                        <select class="form-control" name="jisa_email02">
                                            <option value="mail01">naver.com</option>
                                            <option value="mail02">naver.com</option>
                                        </select>
                                    </section>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">계좌번호</label>
                                <div class="col-md-8">
                                    <input type="text" name="jisa_bnkac" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-list-alt"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">네이버지도좌표</label>
                                <div class="col-md-8">
                                    <input type="text" name="jisa_gps01" class="form-control">
                                    <label class="input"><i class="icon-append fa fa-map-marker"></i></label>
                                    <div class="col-md-12">
                                        <input type="text" name="jisa_gps02" class="form-control">
                                        <label class="input"><i class="icon-append fa fa-map-marker"></i></label>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 textarea"></label>
                                <div class="col-md-8">
                                    <textarea class="form-control custom-scroll" name="jisa_gps_path" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">메모</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="jisa_memo" rows="5"></textarea>
                                    <label class="input"><i class="icon-append fa fa-comment"></i></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">* 사용</label>
                                <div class="col-md-8 selectContainer">
                                    <select class="form-control" name="benefit">
                                        <option value="benefit01">사용</option>
                                        <option value="benefit02">미사용</option>
                                    </select>
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <label class="col-md-4 control-label">등록일</label>
                                <div class="col-md-8">
                                </div>
                            </div>-->
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



