<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Select Contact Mode</h5> -->
                <button type="hidden" style="display:none;" class="list1 hidee"  data-filter="c_button"></button>
                <button class="list1" data-filter="contactbyme"><i class="fas fa-long-arrow-alt-up"></i>Contact by me</button>
                <button class="list2" data-filter="contactbyclient"><i class="fas fa-long-arrow-alt-down"></i>Contact by client</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="select_mode">
                        <button type="hidden"  class="list hidee" ></button>
                        <a class="contact-modal-anchor" href="{{route('user.counsellorCall')}}" data-href="{{route('user.counsellorCall')}}"><button class="list contactbyme itembox1"><i class="fas fa-mobile-alt"></i>Call</button></a> 
                        <a class="contact-modal-anchor" href="{{route('user.counsellorEmail')}}" data-href="{{route('user.counsellorEmail')}}"><button class="list contactbyme itembox1" ><i class="fas fa-at"></i>Email</button></a> 
                        <a class="contact-modal-anchor" href="{{route('user.counsellorSms')}}" data-href="{{route('user.counsellorSms')}}"><button class="list contactbyme itembox1"><i class="fas fa-comment-alt"></i>SMS</button></a>
                        <a class="contact-modal-anchor" href="{{route('user.counsellorWhatsapp')}}" data-href="{{route('user.counsellorWhatsapp')}}"><button class="list itembox1 contactbyme" ><i class="fab fa-whatsapp"></i>WhatsApp</button></a>
                        <a class="contact-modal-anchor" href="{{route('user.counsellorVisit')}}" data-href="{{route('user.counsellorVisit')}}">  <button class="list contactbyme itembox1"><i class="fas fa-walking"></i>Visit</button></a>
                        <a class="contact-modal-anchor" href="{{route('user.clientCall')}}" data-href="{{route('user.clientCall')}}"><button class="list contactbyclient itembox1" ><i class="fas fa-mobile-alt"></i>Call</button></a>
                        <a class="contact-modal-anchor" href="{{route('user.clientEmail')}}" data-href="{{route('user.clientEmail')}}"> <button class="list contactbyclient itembox1" ><i class="fas fa-at"></i>Email</button></a>
                        <a class="contact-modal-anchor" href="{{route('user.clientSms')}}" data-href="{{route('user.clientSms')}}"><button class="list contactbyclient itembox1" ><i class="fas fa-comment-alt"></i>SMS</button></a>
                        <a class="contact-modal-anchor" href="{{route('user.clientWhatsapp')}}" data-href="{{route('user.clientWhatsapp')}}"><button class="list contactbyclient itembox1" ><i class="fab fa-whatsapp"></i>WhatsApp</button></a>
                        <a class="contact-modal-anchor" href="{{route('user.clientVisit')}}" data-href="{{route('user.clientVisit')}}"> <button class="list contactbyclient itembox1" ><i class="fas fa-walking"></i>Visit</button></a>
                    </div>
                    <form class="form">
                    </form>
                </div>
            </div>
            <!-- <div class="modal-footer">
                </div> -->
        </div>
    </div>
</div>