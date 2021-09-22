<button type="hidden"  class="list hidee" ></button>
<a href="{{route('user.counsellorCall', ['id' => $student->userID])}}"><button class="list contactbyme itembox1"><i class="fas fa-mobile-alt"></i>Call</button></a> 
<a href="{{route('user.counsellorEmail', ['id' => $student->userID])}}"><button class="list contactbyme itembox1" ><i class="fas fa-at"></i>Email</button></a> 
<a href="{{route('user.counsellorSms', ['id' => $student->userID])}}"><button class="list contactbyme itembox1"><i class="fas fa-comment-alt"></i>SMS</button></a>
<a href="{{route('user.counsellorWhatsapp', ['id' => $student->userID])}}"><button class="list itembox1 contactbyme" ><i class="fab fa-whatsapp"></i>WhatsApp</button></a>
<a href="{{route('user.counsellorVisit', ['id' => $student->userID])}}">  <button class="list contactbyme itembox1"><i class="fas fa-walking"></i>Visit</button></a>
<a href="{{route('user.clientCall', ['id' => $student->userID])}}"><button class="list contactbyclient itembox1" ><i class="fas fa-mobile-alt"></i>Call</button></a>
<a href="{{route('user.clientEmail', ['id' => $student->userID])}}"> <button class="list contactbyclient itembox1" ><i class="fas fa-at"></i>Email</button></a>
<a href="{{route('user.clientSms', ['id' => $student->userID])}}"><button class="list contactbyclient itembox1" ><i class="fas fa-comment-alt"></i>SMS</button></a>
<a href="{{route('user.clientWhatsapp', ['id' => $student->userID])}}"><button class="list contactbyclient itembox1" ><i class="fab fa-whatsapp"></i>WhatsApp</button></a>
<a href="{{route('user.clientVisit', ['id' => $student->userID])}}"> <button class="list contactbyclient itembox1" ><i class="fas fa-walking"></i>Visit</button></a>