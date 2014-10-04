

@if(Count($curFace))
    <!-- Modal -->
        <div class="modal" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                
                <img id="popup-top" src="{{asset("images/popup-top.png")}}" class="img-responsive hidden-xs">
                <img id="popup-product-top" src="{{asset("images/popup-product-top.png")}}" class="img-responsive">
                
                <div class="modal-content">
                    
                    <div class="modal-header">

                        <div style="height:50px;overflow:hidden"> 
                         <div class="fb-like" data-href="{{Request::url()}}" 
                         data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">{{$curFace->title}}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="popup-image">
                            <img src="{{URL::to('/')}}/uploads/full/{{$curFace->popup_image}}" class="img-responsive">
                        </div>
                        <div class="popup-desc">
                            <p>{{$curFace->desc}}</p>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                       
                    </div>
                    
                </div><!-- /.modal-content -->

                <img id="popup-bottom" src="{{asset("images/popup-bottom.png")}}" class="img-responsive hidden-xs">
                <img id="popup-product-bottom" src="{{asset("images/popup-product-bottom.png")}}" class="img-responsive">
            </div><!-- /.modal-dialog -->
        </div>
<!-- /.modal -->
<div id="fb-root"></div>
<script type="text/javascript">

(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=441963169188652&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>
@endif
