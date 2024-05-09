<section class="profile">
    <div class="profile__container">
        <form class="profile__form" action="{{ route('profile.update', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="profile__form-wrapper">
                <div class="profile__form-input-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_278_317" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="5" y="3"
                              width="14" height="18">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M14 7C14 5.897 13.103 5 12 5C10.897 5 10 5.897 10 7C10 8.103 10.897 9 12 9C13.103 9 14 8.103 14 7ZM16 7C16 9.206 14.206 11 12 11C9.794 11 8 9.206 8 7C8 4.794 9.794 3 12 3C14.206 3 16 4.794 16 7ZM5 20C5 16.14 8.141 13 12 13C15.859 13 19 16.14 19 20C19 20.552 18.553 21 18 21C17.447 21 17 20.552 17 20C17 17.243 14.757 15 12 15C9.243 15 7 17.243 7 20C7 20.552 6.553 21 6 21C5.447 21 5 20.552 5 20Z"
                                  fill="white"/>
                        </mask>
                        <g mask="url(#mask0_278_317)">
                            <rect width="24" height="24" fill="white"/>
                        </g>
                    </svg>
                    <input  value="{{ old('email') }}" name="email" class="profile__form-input" type="text" required placeholder="Email">

                    <div class="error-validation">
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="profile__form-input-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_278_322" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="4" y="2"
                              width="16" height="20">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 16C11.448 16 11 15.552 11 15C11 14.448 11.448 14 12 14C12.552 14 13 14.448 13 15C13 15.552 12.552 16 12 16ZM12 12C10.346 12 9 13.346 9 15C9 16.654 10.346 18 12 18C13.654 18 15 16.654 15 15C15 13.346 13.654 12 12 12ZM18 19C18 19.552 17.552 20 17 20H7C6.448 20 6 19.552 6 19V11C6 10.448 6.448 10 7 10H8H10H14H16H17C17.552 10 18 10.448 18 11V19ZM10 6.111C10 4.947 10.897 4 12 4C13.103 4 14 4.947 14 6.111V8H10V6.111ZM17 8H16V6.111C16 3.845 14.206 2 12 2C9.794 2 8 3.845 8 6.111V8H7C5.346 8 4 9.346 4 11V19C4 20.654 5.346 22 7 22H17C18.654 22 20 20.654 20 19V11C20 9.346 18.654 8 17 8Z"
                                  fill="white"/>
                        </mask>
                        <g mask="url(#mask0_278_322)">
                            <rect width="24" height="24" fill="white"/>
                        </g>
                    </svg>
                    <input name="password" value="{{ old('password') }}" class="profile__form-input" type="password" required placeholder="Пароль">

                    <div class="error-validation">
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="profile__form-input-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_278_322" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="4" y="2"
                              width="16" height="20">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 16C11.448 16 11 15.552 11 15C11 14.448 11.448 14 12 14C12.552 14 13 14.448 13 15C13 15.552 12.552 16 12 16ZM12 12C10.346 12 9 13.346 9 15C9 16.654 10.346 18 12 18C13.654 18 15 16.654 15 15C15 13.346 13.654 12 12 12ZM18 19C18 19.552 17.552 20 17 20H7C6.448 20 6 19.552 6 19V11C6 10.448 6.448 10 7 10H8H10H14H16H17C17.552 10 18 10.448 18 11V19ZM10 6.111C10 4.947 10.897 4 12 4C13.103 4 14 4.947 14 6.111V8H10V6.111ZM17 8H16V6.111C16 3.845 14.206 2 12 2C9.794 2 8 3.845 8 6.111V8H7C5.346 8 4 9.346 4 11V19C4 20.654 5.346 22 7 22H17C18.654 22 20 20.654 20 19V11C20 9.346 18.654 8 17 8Z"
                                  fill="white"/>
                        </mask>
                        <g mask="url(#mask0_278_322)">
                            <rect width="24" height="24" fill="white"/>
                        </g>
                    </svg>
                    <input name="password_confirmation"  value="{{ old('password_confirmation') }}" class="profile__form-input" type="password" required placeholder="Подтвердите пароль">

                    <div class="error-validation">
                        @error('password_confirmation')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="profile__form-input-wrapper">
                    <input name="avatar" class="profile__form-input--file" type="file" required>
                    <div class="error-validation">
                        @error('avatar')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button class="profile__form-button purple-button" type="submit">Войти</button>
        </form>
    </div>
</section>
