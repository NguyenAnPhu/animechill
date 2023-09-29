@include('block.link')
@extends('layouts.personal-page')
@section('title','Đăng Ký Tài Khoản')
    

<div class="h-screen md:flex">
    <div
        class="relative overflow-hidden md:flex w-1/2 h-full justify-around items-center hidden" style="background-image: url('{{asset('assets/images/bg-register.jpg')}}'); background-repeat: no-repeat; background-size: 38rem 46rem">
        
        {{-- <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div> --}}
    </div>
    <div class="flex md: justify-center py-10 items-center bg-white">
        <form class="bg-white" action="{{ route('addUser')}}" method="POST">
            @csrf
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="9" cy="9" r="2" stroke="#1C274C" stroke-width="1.5"></circle> <path d="M13 15C13 16.1046 13 17 9 17C5 17 5 16.1046 5 15C5 13.8954 6.79086 13 9 13C11.2091 13 13 13.8954 13 15Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M19 12H15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M19 9H14" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M19 15H16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                <input class="pl-2 outline-none border-none" type="text" name="name" id="name" placeholder="Full name" />
            </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                   <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione-monotone" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M38.026 30.765a35.948 35.948 0 0 0 2.005-.265v-4.701c-1.024.489-2.092.791-3.154 1.025c-2.693.563-5.432.629-8.146.345c-1.368-.173-2.685-.399-4.049-.884c-.27-.102-.538-.216-.805-.344v4.226c4.682.767 9.443 1.092 14.149.598" fill="#000000"></path><path d="M56.299 41.987V24.841c0-1.988-1.366-3.839-3.703-5.407v-7.509c0-.735-.583-1.343-1.342-1.458c.557-.236.951-.723.951-1.309c0-.813-1.652-3.437-1.652-3.437s-1.654 2.623-1.654 3.437c0 .578.385 1.061.931 1.301c-.802.08-1.431.703-1.431 1.466v5.385a35.157 35.157 0 0 0-4.49-1.377a1.6 1.6 0 0 0 .123-.596c0-.983-2-4.154-2-4.154s-1.83 2.904-1.984 4.014c-1.959-.289-4.044-.457-6.195-.525V7.467c0-.661-.512-1.213-1.188-1.334c.461-.215.783-.631.783-1.126C33.447 4.295 32 2 32 2s-1.447 2.295-1.447 3.007c0 .489.314.901.766 1.118c-.713.092-1.266.655-1.266 1.342v7.206c-2.103.07-4.142.236-6.06.518c-.188-1.135-1.981-3.979-1.981-3.979s-2 3.17-2 4.154c0 .197.045.383.111.56a34.638 34.638 0 0 0-4.633 1.429V11.94c0-.734-.584-1.342-1.344-1.457c.557-.236.953-.724.953-1.31c0-.813-1.654-3.437-1.654-3.437s-1.654 2.623-1.654 3.437c0 .578.386 1.061.932 1.301c-.803.081-1.432.704-1.432 1.466v7.574c-2.267 1.552-3.592 3.374-3.592 5.328V41.99C4.117 44.066 2 46.62 2 49.383C2 56.352 15.432 62 32 62s30-5.648 30-12.617c0-2.764-2.118-5.318-5.701-7.396M49.725 9.943c0-.407.828-1.719.828-1.719s.828 1.312.828 1.719a.677.677 0 0 1-.249.512c-.046-.004-.091-.013-.138-.013h-.992c-.013 0-.024.003-.037.003a.67.67 0 0 1-.24-.502m-.327 1.982c0-.262.276-.482.604-.482h.992c.326 0 .602.221.602.482v10.797a.422.422 0 0 1-.116.284l-.368.188a.708.708 0 0 1-.117.011h-.992c-.327 0-.604-.222-.604-.483V11.925zm-7.367 2.284s1.002 1.585 1.002 2.077c0 .491-.449.89-1.002.89s-1-.398-1-.89s1-2.077 1-2.077M31.277 5.693c0-.355.723-1.502.723-1.502s.725 1.146.725 1.502a.59.59 0 0 1-.197.427c-.048-.005-.094-.014-.143-.014h-.867c-.018 0-.034.004-.052.005a.583.583 0 0 1-.189-.418m-.224 1.774c0-.195.213-.36.465-.36h.867c.253 0 .467.165.467.36v9.448a.294.294 0 0 1-.078.195l-.305.157a.583.583 0 0 1-.084.006h-.867c-.252 0-.465-.164-.465-.358V7.467m-9.041 6.769s1 1.586 1 2.078c0 .49-.447.89-1 .89s-1-.399-1-.89c0-.492 1-2.078 1-2.078m-9.393-4.28c0-.405.826-1.717.826-1.717s.828 1.312.828 1.717a.677.677 0 0 1-.25.514c-.046-.004-.09-.013-.137-.013h-.992c-.012 0-.023.003-.035.003a.677.677 0 0 1-.24-.504m-.328 1.982c0-.261.276-.481.604-.481h.992c.327 0 .604.221.604.481v10.798a.417.417 0 0 1-.117.282l-.368.189a.72.72 0 0 1-.118.011h-.992c-.327 0-.604-.221-.604-.482V11.938zm-1.104 11.643c.033-.17.099-.325.158-.483c.066.242.196.459.373.638c-.078.571.062 1.15.367 1.651c.649 1.043 1.76 1.773 2.892 2.353c1.585.789 3.291 1.292 5.035 1.688V19.249c0-.265.127-.497.313-.688c-.288.056-.578.098-.864.162c-1.345.306-2.713.711-3.971 1.296v-.529c.015-.007.029-.015.044-.021c1.228-.549 2.509-.952 3.808-1.26a41.605 41.605 0 0 1 7.928-1.046c.935-.035 1.872-.03 2.81-.007c.097.492.479.886.98 1.041a40.685 40.685 0 0 0-3.778-.213a43.034 43.034 0 0 0-4.439.208c.589.114 1.035.532 1.035 1.057v1.832l.053-.026c.686-.298 1.365-.47 2.051-.6c1.369-.252 2.74-.307 4.105-.229c1.372.095 2.712.285 4.052.856c.33.15.659.333.964.609c.289.253.628.744.492 1.306c-.145.524-.506.79-.814.994a4.03 4.03 0 0 1-1.002.44c-1.357.393-2.73.389-4.073.218c-.673-.107-1.329-.231-1.969-.54c-.297-.162-.649-.359-.753-.777c-.057-.461.34-.701.616-.847l.072.131c-.264.16-.526.422-.45.664s.375.41.653.527c.573.229 1.245.312 1.88.36c1.285.069 2.612-.053 3.784-.456c.526-.169 1.18-.601 1.206-.9c.082-.214-.438-.64-.99-.827c-1.125-.414-2.458-.54-3.719-.587c-1.276-.029-2.566.069-3.794.34c-.609.136-1.213.318-1.734.567a4.123 4.123 0 0 0-.63.375v1.517c.372.258.839.472 1.323.642c1.137.389 2.449.607 3.705.741c2.545.269 5.159.183 7.659-.286c1.229-.242 2.446-.587 3.467-1.171V20.52c-.402-.24-.827-.46-1.276-.648c-1.157-.485-2.412-.806-3.689-1.075a42.754 42.754 0 0 0-3.36-.522h.68c.125 0 .249-.015.37-.045l.544-.264l.104-.071c.153-.138.268-.301.344-.479c.514.063 1.027.125 1.539.213c1.319.231 2.652.521 3.958 1.015c.283.106.563.229.841.361c.126-.501.638-.887 1.28-.887h1.199c.736 0 1.334.496 1.334 1.106V29.63c3.086-.913 6.008-2.354 8.468-4.521l.104.107c-1.798 1.965-4.084 3.494-6.544 4.568c-.665.287-1.342.544-2.027.779v.837c0 .304-.148.581-.389.78l-.6.288a1.69 1.69 0 0 1-.346.039h-1.199c-.653 0-1.172-.397-1.287-.913c-.633.127-1.27.236-1.908.324c-4.763.653-9.605.425-14.306-.44a1.03 1.03 0 0 1-.374.729l-.6.287c-.109.024-.227.04-.346.04h-1.199c-.738 0-1.334-.496-1.334-1.107v-.821c-1.87-.511-3.719-1.16-5.432-2.131c-1.165-.685-2.331-1.519-3.032-2.784c-.342-.628-.511-1.39-.362-2.11m43.112 23.756c0 3.881-9.536 8.221-22.299 8.221c-12.764 0-22.301-4.34-22.301-8.221v-3.974c.984-.053 1.77-.766 1.77-1.645v-3.855c0-1.214 1.119-2.198 2.5-2.198s2.502.984 2.502 2.198v4.756c0 1.412 1.303 2.558 2.908 2.558c1.607 0 2.91-1.146 2.91-2.558V37.76c0-1.271 1.172-2.3 2.617-2.3c1.447 0 2.619 1.029 2.619 2.3v3.098c0 .707.65 1.279 1.455 1.279c.803 0 1.453-.572 1.453-1.279V38.4c0-.918.848-1.662 1.893-1.662c1.043 0 1.889.744 1.889 1.662v4.22c0 1.412 1.305 2.558 2.91 2.558c1.607 0 2.91-1.146 2.91-2.558v-4.73c0-1.2 1.107-2.174 2.473-2.174s2.473.974 2.473 2.174v3.452c0 .706.65 1.278 1.455 1.278c.803 0 1.455-.572 1.455-1.278v-2.417c0-.629.578-1.139 1.293-1.139c.717 0 1.297.51 1.297 1.139v3.695c0 1.412 1.301 2.558 2.908 2.558c.32 0 .622-.057.91-.141v2.3" fill="#000000"></path></g></svg>
                    <input class="pl-2 outline-none border-none" type="text" name="birthday" id="birthday" placeholder="Birthday (dd/mm/yyyy)" />
                </div>
                    <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                        <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st1{fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;} </style> <path class="st0" d="M23,11c-1.4-1.4-3.6-1.4-4.9,0L16,13.1L13.9,11c-1.4-1.4-3.6-1.4-4.9,0s-1.4,3.6,0,5l2.1,2.1l4.9,5l4.9-5L23,16 C24.3,14.6,24.3,12.4,23,11z"></path> <path class="st0" d="M25,27H7c-2.2,0-4-1.8-4-4V9c0-2.2,1.8-4,4-4h18c2.2,0,4,1.8,4,4v14C29,25.2,27.2,27,25,27z"></path> <line class="st0" x1="24" y1="13.1" x2="29" y2="10"></line> <line class="st0" x1="3" y1="10" x2="8" y2="13.1"></line> </g></svg>
                        <input class="pl-2 outline-none border-none" type="text" name="email" id="email" placeholder="Email Address" />
                    </div>
                        <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                            <svg fill="#000000" height="36px" width="36px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="25 0 344.001 577.001" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M108.322,118.183V256.03H472.63V118.183H108.322z M226.121,198.24l-9.846,17.058l-19.337-11.165v22.328h-19.692v-22.328 l-19.337,11.165l-9.846-17.058l19.335-11.163l-19.335-11.164l9.846-17.058l19.337,11.166v-22.328h19.692v22.328l19.337-11.166 l9.846,17.058l-19.335,11.164L226.121,198.24z M324.582,198.24l-9.846,17.058l-19.337-11.165v22.328h-19.692v-22.328 l-19.337,11.165l-9.846-17.058l19.335-11.163l-19.335-11.164l9.846-17.058l19.337,11.166v-22.328h19.692v22.328l19.337-11.166 l9.846,17.058l-19.335,11.164L324.582,198.24z M423.044,198.24l-9.846,17.058l-19.337-11.165v22.328h-19.692v-22.328 l-19.337,11.165l-9.846-17.058l19.335-11.163l-19.335-11.164l9.846-17.058l19.337,11.166v-22.328h19.692v22.328l19.337-11.166 l9.846,17.058l-19.335,11.164L423.044,198.24z"></path> </g> </g> <g> <g> <path d="M88.63,275.721v-59.076H68.938v-98.491c0-54.289,44.168-98.461,98.461-98.461c47.56,0,87.343,33.898,96.481,78.798h19.898 C274.371,42.684,225.836,0,167.399,0C102.25,0,49.246,53,49.246,118.154v98.491H0.015v256h334.769V275.721H88.63z M201.158,413.542h-67.517l10.888-55.48c-6.657-6.166-10.888-14.908-10.888-24.696c0-18.645,15.114-33.759,33.759-33.759 c18.645,0,33.759,15.114,33.759,33.759c0,9.788-4.231,18.53-10.888,24.696L201.158,413.542z"></path> </g> </g> </g></svg>
                            <input class="pl-2 outline-none border-none" type="password" name="password" id="password" placeholder="Password" />
                        </div>
                            {{-- <a href='' style="text-decoration: none" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2 text-center">
                                        Submit
                            </a> --}}
                            <br>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Submit
                            </button>
                            <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span>
        </form>
    </div>
</div>