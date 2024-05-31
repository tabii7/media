@extends('layouts.location vendor.locationVendorLayout')
@section('location-vendor-content')

<div class="container-fluid">

    <div class="row align-items-center mb-2">
        <div class="col-lg">
            <div class="page-title-box">
                <h4>Reviews</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
            </div>
        </div>
        <div class="col-lg-auto review-btns">
            <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-light active">
                    <input type="radio" name="reviews" checked="checked"> Reviews Received
                </label>

                <label class="btn btn-outline-light">
                    <input type="radio" name="reviews"> Review Submitted
                </label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="review-card">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="star-rating">
                            <svg xmlns="http://www.w3.org/2000/svg" width="130" height="18" viewBox="0 0 130 18" fill="none">
                                <path d="M6.43793 3.06721C7.57823 1.0224 8.14793 0 9.00024 0C9.85254 0 10.4222 1.0224 11.5625 3.06721L11.8577 3.59641C12.1817 4.17781 12.3437 4.46851 12.5957 4.66021C12.8477 4.85191 13.1628 4.92301 13.7928 5.06522L14.3652 5.19482C16.5792 5.69612 17.6853 5.94632 17.949 6.79322C18.2118 7.63922 17.4576 8.52213 15.9483 10.287L15.5577 10.7433C15.1293 11.2446 14.9142 11.4957 14.8179 11.8053C14.7216 12.1158 14.754 12.4506 14.8188 13.1193L14.8782 13.7286C15.1059 16.0839 15.2202 17.2612 14.5308 17.7841C13.8414 18.3079 12.8045 17.83 10.7327 16.8759L10.1954 16.6293C9.60684 16.3575 9.31254 16.2225 9.00024 16.2225C8.68794 16.2225 8.39364 16.3575 7.80503 16.6293L7.26863 16.8759C5.19593 17.83 4.15912 18.307 3.47062 17.785C2.78032 17.2612 2.89462 16.0839 3.12232 13.7286L3.18172 13.1202C3.24652 12.4506 3.27892 12.1158 3.18172 11.8062C3.08632 11.4957 2.87122 11.2446 2.44282 10.7442L2.05222 10.287C0.542913 8.52303 -0.211289 7.64012 0.0515116 6.79322C0.315212 5.94632 1.42222 5.69522 3.63622 5.19482L4.20862 5.06522C4.83773 4.92301 5.15183 4.85191 5.40473 4.66021C5.65673 4.46851 5.81873 4.17781 6.14273 3.59641L6.43793 3.06721Z" fill="#F6BA21"></path>
                                <path d="M34.4384 3.06721C35.5787 1.0224 36.1484 0 37.0007 0C37.853 0 38.4227 1.0224 39.563 3.06721L39.8582 3.59641C40.1822 4.17781 40.3442 4.46851 40.5962 4.66021C40.8482 4.85191 41.1632 4.92301 41.7932 5.06522L42.3656 5.19482C44.5796 5.69612 45.6858 5.94632 45.9495 6.79322C46.2123 7.63922 45.458 8.52213 43.9487 10.287L43.5581 10.7433C43.1297 11.2446 42.9146 11.4957 42.8183 11.8053C42.722 12.1158 42.7544 12.4506 42.8192 13.1193L42.8786 13.7286C43.1063 16.0839 43.2206 17.2612 42.5312 17.7841C41.8418 18.3079 40.805 17.83 38.7332 16.8759L38.1959 16.6293C37.6073 16.3575 37.313 16.2225 37.0007 16.2225C36.6884 16.2225 36.3941 16.3575 35.8055 16.6293L35.2691 16.8759C33.1964 17.83 32.1596 18.307 31.4711 17.785C30.7808 17.2612 30.8951 16.0839 31.1228 13.7286L31.1822 13.1202C31.247 12.4506 31.2794 12.1158 31.1822 11.8062C31.0868 11.4957 30.8717 11.2446 30.4433 10.7442L30.0527 10.287C28.5434 8.52303 27.7892 7.64012 28.052 6.79322C28.3157 5.94632 29.4227 5.69522 31.6367 5.19482L32.2091 5.06522C32.8382 4.92301 33.1523 4.85191 33.4052 4.66021C33.6572 4.46851 33.8192 4.17781 34.1432 3.59641L34.4384 3.06721Z" fill="#F6BA21"></path>
                                <path d="M62.4389 3.06721C63.5792 1.0224 64.1489 0 65.0012 0C65.8535 0 66.4232 1.0224 67.5635 3.06721L67.8587 3.59641C68.1827 4.17781 68.3447 4.46851 68.5967 4.66021C68.8487 4.85191 69.1637 4.92301 69.7937 5.06522L70.3661 5.19482C72.5801 5.69612 73.6862 5.94632 73.9499 6.79322C74.2127 7.63922 73.4585 8.52213 71.9492 10.287L71.5586 10.7433C71.1302 11.2446 70.9151 11.4957 70.8188 11.8053C70.7225 12.1158 70.7549 12.4506 70.8197 13.1193L70.8791 13.7286C71.1068 16.0839 71.2211 17.2612 70.5317 17.7841C69.8423 18.3079 68.8055 17.83 66.7337 16.8759L66.1964 16.6293C65.6078 16.3575 65.3135 16.2225 65.0012 16.2225C64.6889 16.2225 64.3946 16.3575 63.806 16.6293L63.2696 16.8759C61.1969 17.83 60.1601 18.307 59.4716 17.785C58.7813 17.2612 58.8956 16.0839 59.1233 13.7286L59.1827 13.1202C59.2475 12.4506 59.2799 12.1158 59.1827 11.8062C59.0873 11.4957 58.8722 11.2446 58.4438 10.7442L58.0532 10.287C56.5439 8.52303 55.7897 7.64012 56.0525 6.79322C56.3162 5.94632 57.4232 5.69522 59.6372 5.19482L60.2096 5.06522C60.8387 4.92301 61.1528 4.85191 61.4057 4.66021C61.6577 4.46851 61.8197 4.17781 62.1437 3.59641L62.4389 3.06721Z" fill="#F6BA21"></path>
                                <path d="M90.4394 3.06721C91.5797 1.0224 92.1494 0 93.0017 0C93.854 0 94.4237 1.0224 95.564 3.06721L95.8592 3.59641C96.1832 4.17781 96.3452 4.46851 96.5972 4.66021C96.8492 4.85191 97.1642 4.92301 97.7942 5.06522L98.3666 5.19482C100.581 5.69612 101.687 5.94632 101.95 6.79322C102.213 7.63922 101.459 8.52213 99.9497 10.287L99.5591 10.7433C99.1307 11.2446 98.9156 11.4957 98.8193 11.8053C98.723 12.1158 98.7554 12.4506 98.8202 13.1193L98.8796 13.7286C99.1073 16.0839 99.2216 17.2612 98.5322 17.7841C97.8428 18.3079 96.806 17.83 94.7342 16.8759L94.1969 16.6293C93.6083 16.3575 93.314 16.2225 93.0017 16.2225C92.6894 16.2225 92.3951 16.3575 91.8065 16.6293L91.2701 16.8759C89.1974 17.83 88.1606 18.307 87.4721 17.785C86.7818 17.2612 86.8961 16.0839 87.1238 13.7286L87.1832 13.1202C87.248 12.4506 87.2804 12.1158 87.1832 11.8062C87.0878 11.4957 86.8727 11.2446 86.4443 10.7442L86.0537 10.287C84.5444 8.52303 83.7902 7.64012 84.053 6.79322C84.3167 5.94632 85.4237 5.69522 87.6377 5.19482L88.2101 5.06522C88.8392 4.92301 89.1533 4.85191 89.4062 4.66021C89.6582 4.46851 89.8202 4.17781 90.1442 3.59641L90.4394 3.06721Z" fill="#F6BA21"></path>
                                <path d="M118.44 3.06721C119.58 1.0224 120.15 0 121.002 0C121.854 0 122.424 1.0224 123.564 3.06721L123.86 3.59641C124.184 4.17781 124.346 4.46851 124.598 4.66021C124.85 4.85191 125.165 4.92301 125.795 5.06522L126.367 5.19482C128.581 5.69612 129.687 5.94632 129.951 6.79322C130.214 7.63922 129.46 8.52213 127.95 10.287L127.56 10.7433C127.131 11.2446 126.916 11.4957 126.82 11.8053C126.724 12.1158 126.756 12.4506 126.821 13.1193L126.88 13.7286C127.108 16.0839 127.222 17.2612 126.533 17.7841C125.843 18.3079 124.807 17.83 122.735 16.8759L122.197 16.6293C121.609 16.3575 121.314 16.2225 121.002 16.2225C120.69 16.2225 120.396 16.3575 119.807 16.6293L119.271 16.8759C117.198 17.83 116.161 18.307 115.473 17.785C114.782 17.2612 114.897 16.0839 115.124 13.7286L115.184 13.1202C115.248 12.4506 115.281 12.1158 115.184 11.8062C115.088 11.4957 114.873 11.2446 114.445 10.7442L114.054 10.287C112.545 8.52303 111.791 7.64012 112.053 6.79322C112.317 5.94632 113.424 5.69522 115.638 5.19482L116.211 5.06522C116.84 4.92301 117.154 4.85191 117.407 4.66021C117.659 4.46851 117.821 4.17781 118.145 3.59641L118.44 3.06721Z" fill="#E9E9E9"></path>
                            </svg>
                        </div>
                        <div class="review-title">Vendor posted a review on Thai's Taste Restaurant</div>

                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-lg-end justify-content-between">
                            <div class="date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                    <path d="M3.2 7.2H4.8V8.8H3.2V7.2ZM3.2 10.4H4.8V12H3.2V10.4ZM6.4 7.2H8V8.8H6.4V7.2ZM6.4 10.4H8V12H6.4V10.4ZM9.6 7.2H11.2V8.8H9.6V7.2ZM9.6 10.4H11.2V12H9.6V10.4Z" fill="#3576AF"></path>
                                    <path d="M1.6 16H12.8C13.6824 16 14.4 15.2824 14.4 14.4V3.2C14.4 2.3176 13.6824 1.6 12.8 1.6H11.2V0H9.6V1.6H4.8V0H3.2V1.6H1.6C0.7176 1.6 0 2.3176 0 3.2V14.4C0 15.2824 0.7176 16 1.6 16ZM12.8 4.8L12.8008 14.4H1.6V4.8H12.8Z" fill="#3576AF"></path>
                                </svg>
                                <span class="ml-2">20 Nov, 2023  |  13:57</span>
                            </div>
                            <button type="button" class="ml-3 btn btn-primary">See Reviews</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="star-rating">
                            <svg xmlns="http://www.w3.org/2000/svg" width="130" height="18" viewBox="0 0 130 18" fill="none">
                                <path d="M6.43793 3.06721C7.57823 1.0224 8.14793 0 9.00024 0C9.85254 0 10.4222 1.0224 11.5625 3.06721L11.8577 3.59641C12.1817 4.17781 12.3437 4.46851 12.5957 4.66021C12.8477 4.85191 13.1628 4.92301 13.7928 5.06522L14.3652 5.19482C16.5792 5.69612 17.6853 5.94632 17.949 6.79322C18.2118 7.63922 17.4576 8.52213 15.9483 10.287L15.5577 10.7433C15.1293 11.2446 14.9142 11.4957 14.8179 11.8053C14.7216 12.1158 14.754 12.4506 14.8188 13.1193L14.8782 13.7286C15.1059 16.0839 15.2202 17.2612 14.5308 17.7841C13.8414 18.3079 12.8045 17.83 10.7327 16.8759L10.1954 16.6293C9.60684 16.3575 9.31254 16.2225 9.00024 16.2225C8.68794 16.2225 8.39364 16.3575 7.80503 16.6293L7.26863 16.8759C5.19593 17.83 4.15912 18.307 3.47062 17.785C2.78032 17.2612 2.89462 16.0839 3.12232 13.7286L3.18172 13.1202C3.24652 12.4506 3.27892 12.1158 3.18172 11.8062C3.08632 11.4957 2.87122 11.2446 2.44282 10.7442L2.05222 10.287C0.542913 8.52303 -0.211289 7.64012 0.0515116 6.79322C0.315212 5.94632 1.42222 5.69522 3.63622 5.19482L4.20862 5.06522C4.83773 4.92301 5.15183 4.85191 5.40473 4.66021C5.65673 4.46851 5.81873 4.17781 6.14273 3.59641L6.43793 3.06721Z" fill="#F6BA21"></path>
                                <path d="M34.4384 3.06721C35.5787 1.0224 36.1484 0 37.0007 0C37.853 0 38.4227 1.0224 39.563 3.06721L39.8582 3.59641C40.1822 4.17781 40.3442 4.46851 40.5962 4.66021C40.8482 4.85191 41.1632 4.92301 41.7932 5.06522L42.3656 5.19482C44.5796 5.69612 45.6858 5.94632 45.9495 6.79322C46.2123 7.63922 45.458 8.52213 43.9487 10.287L43.5581 10.7433C43.1297 11.2446 42.9146 11.4957 42.8183 11.8053C42.722 12.1158 42.7544 12.4506 42.8192 13.1193L42.8786 13.7286C43.1063 16.0839 43.2206 17.2612 42.5312 17.7841C41.8418 18.3079 40.805 17.83 38.7332 16.8759L38.1959 16.6293C37.6073 16.3575 37.313 16.2225 37.0007 16.2225C36.6884 16.2225 36.3941 16.3575 35.8055 16.6293L35.2691 16.8759C33.1964 17.83 32.1596 18.307 31.4711 17.785C30.7808 17.2612 30.8951 16.0839 31.1228 13.7286L31.1822 13.1202C31.247 12.4506 31.2794 12.1158 31.1822 11.8062C31.0868 11.4957 30.8717 11.2446 30.4433 10.7442L30.0527 10.287C28.5434 8.52303 27.7892 7.64012 28.052 6.79322C28.3157 5.94632 29.4227 5.69522 31.6367 5.19482L32.2091 5.06522C32.8382 4.92301 33.1523 4.85191 33.4052 4.66021C33.6572 4.46851 33.8192 4.17781 34.1432 3.59641L34.4384 3.06721Z" fill="#F6BA21"></path>
                                <path d="M62.4389 3.06721C63.5792 1.0224 64.1489 0 65.0012 0C65.8535 0 66.4232 1.0224 67.5635 3.06721L67.8587 3.59641C68.1827 4.17781 68.3447 4.46851 68.5967 4.66021C68.8487 4.85191 69.1637 4.92301 69.7937 5.06522L70.3661 5.19482C72.5801 5.69612 73.6862 5.94632 73.9499 6.79322C74.2127 7.63922 73.4585 8.52213 71.9492 10.287L71.5586 10.7433C71.1302 11.2446 70.9151 11.4957 70.8188 11.8053C70.7225 12.1158 70.7549 12.4506 70.8197 13.1193L70.8791 13.7286C71.1068 16.0839 71.2211 17.2612 70.5317 17.7841C69.8423 18.3079 68.8055 17.83 66.7337 16.8759L66.1964 16.6293C65.6078 16.3575 65.3135 16.2225 65.0012 16.2225C64.6889 16.2225 64.3946 16.3575 63.806 16.6293L63.2696 16.8759C61.1969 17.83 60.1601 18.307 59.4716 17.785C58.7813 17.2612 58.8956 16.0839 59.1233 13.7286L59.1827 13.1202C59.2475 12.4506 59.2799 12.1158 59.1827 11.8062C59.0873 11.4957 58.8722 11.2446 58.4438 10.7442L58.0532 10.287C56.5439 8.52303 55.7897 7.64012 56.0525 6.79322C56.3162 5.94632 57.4232 5.69522 59.6372 5.19482L60.2096 5.06522C60.8387 4.92301 61.1528 4.85191 61.4057 4.66021C61.6577 4.46851 61.8197 4.17781 62.1437 3.59641L62.4389 3.06721Z" fill="#F6BA21"></path>
                                <path d="M90.4394 3.06721C91.5797 1.0224 92.1494 0 93.0017 0C93.854 0 94.4237 1.0224 95.564 3.06721L95.8592 3.59641C96.1832 4.17781 96.3452 4.46851 96.5972 4.66021C96.8492 4.85191 97.1642 4.92301 97.7942 5.06522L98.3666 5.19482C100.581 5.69612 101.687 5.94632 101.95 6.79322C102.213 7.63922 101.459 8.52213 99.9497 10.287L99.5591 10.7433C99.1307 11.2446 98.9156 11.4957 98.8193 11.8053C98.723 12.1158 98.7554 12.4506 98.8202 13.1193L98.8796 13.7286C99.1073 16.0839 99.2216 17.2612 98.5322 17.7841C97.8428 18.3079 96.806 17.83 94.7342 16.8759L94.1969 16.6293C93.6083 16.3575 93.314 16.2225 93.0017 16.2225C92.6894 16.2225 92.3951 16.3575 91.8065 16.6293L91.2701 16.8759C89.1974 17.83 88.1606 18.307 87.4721 17.785C86.7818 17.2612 86.8961 16.0839 87.1238 13.7286L87.1832 13.1202C87.248 12.4506 87.2804 12.1158 87.1832 11.8062C87.0878 11.4957 86.8727 11.2446 86.4443 10.7442L86.0537 10.287C84.5444 8.52303 83.7902 7.64012 84.053 6.79322C84.3167 5.94632 85.4237 5.69522 87.6377 5.19482L88.2101 5.06522C88.8392 4.92301 89.1533 4.85191 89.4062 4.66021C89.6582 4.46851 89.8202 4.17781 90.1442 3.59641L90.4394 3.06721Z" fill="#F6BA21"></path>
                                <path d="M118.44 3.06721C119.58 1.0224 120.15 0 121.002 0C121.854 0 122.424 1.0224 123.564 3.06721L123.86 3.59641C124.184 4.17781 124.346 4.46851 124.598 4.66021C124.85 4.85191 125.165 4.92301 125.795 5.06522L126.367 5.19482C128.581 5.69612 129.687 5.94632 129.951 6.79322C130.214 7.63922 129.46 8.52213 127.95 10.287L127.56 10.7433C127.131 11.2446 126.916 11.4957 126.82 11.8053C126.724 12.1158 126.756 12.4506 126.821 13.1193L126.88 13.7286C127.108 16.0839 127.222 17.2612 126.533 17.7841C125.843 18.3079 124.807 17.83 122.735 16.8759L122.197 16.6293C121.609 16.3575 121.314 16.2225 121.002 16.2225C120.69 16.2225 120.396 16.3575 119.807 16.6293L119.271 16.8759C117.198 17.83 116.161 18.307 115.473 17.785C114.782 17.2612 114.897 16.0839 115.124 13.7286L115.184 13.1202C115.248 12.4506 115.281 12.1158 115.184 11.8062C115.088 11.4957 114.873 11.2446 114.445 10.7442L114.054 10.287C112.545 8.52303 111.791 7.64012 112.053 6.79322C112.317 5.94632 113.424 5.69522 115.638 5.19482L116.211 5.06522C116.84 4.92301 117.154 4.85191 117.407 4.66021C117.659 4.46851 117.821 4.17781 118.145 3.59641L118.44 3.06721Z" fill="#E9E9E9"></path>
                            </svg>
                        </div>
                        <div class="review-title">Vendor posted a review on Thai's Taste Restaurant</div>

                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-lg-end justify-content-between">
                            <div class="date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                    <path d="M3.2 7.2H4.8V8.8H3.2V7.2ZM3.2 10.4H4.8V12H3.2V10.4ZM6.4 7.2H8V8.8H6.4V7.2ZM6.4 10.4H8V12H6.4V10.4ZM9.6 7.2H11.2V8.8H9.6V7.2ZM9.6 10.4H11.2V12H9.6V10.4Z" fill="#3576AF"></path>
                                    <path d="M1.6 16H12.8C13.6824 16 14.4 15.2824 14.4 14.4V3.2C14.4 2.3176 13.6824 1.6 12.8 1.6H11.2V0H9.6V1.6H4.8V0H3.2V1.6H1.6C0.7176 1.6 0 2.3176 0 3.2V14.4C0 15.2824 0.7176 16 1.6 16ZM12.8 4.8L12.8008 14.4H1.6V4.8H12.8Z" fill="#3576AF"></path>
                                </svg>
                                <span class="ml-2">20 Nov, 2023  |  13:57</span>
                            </div>
                            <button type="button" class="ml-3 btn btn-primary">See Reviews</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="star-rating">
                            <svg xmlns="http://www.w3.org/2000/svg" width="130" height="18" viewBox="0 0 130 18" fill="none">
                                <path d="M6.43793 3.06721C7.57823 1.0224 8.14793 0 9.00024 0C9.85254 0 10.4222 1.0224 11.5625 3.06721L11.8577 3.59641C12.1817 4.17781 12.3437 4.46851 12.5957 4.66021C12.8477 4.85191 13.1628 4.92301 13.7928 5.06522L14.3652 5.19482C16.5792 5.69612 17.6853 5.94632 17.949 6.79322C18.2118 7.63922 17.4576 8.52213 15.9483 10.287L15.5577 10.7433C15.1293 11.2446 14.9142 11.4957 14.8179 11.8053C14.7216 12.1158 14.754 12.4506 14.8188 13.1193L14.8782 13.7286C15.1059 16.0839 15.2202 17.2612 14.5308 17.7841C13.8414 18.3079 12.8045 17.83 10.7327 16.8759L10.1954 16.6293C9.60684 16.3575 9.31254 16.2225 9.00024 16.2225C8.68794 16.2225 8.39364 16.3575 7.80503 16.6293L7.26863 16.8759C5.19593 17.83 4.15912 18.307 3.47062 17.785C2.78032 17.2612 2.89462 16.0839 3.12232 13.7286L3.18172 13.1202C3.24652 12.4506 3.27892 12.1158 3.18172 11.8062C3.08632 11.4957 2.87122 11.2446 2.44282 10.7442L2.05222 10.287C0.542913 8.52303 -0.211289 7.64012 0.0515116 6.79322C0.315212 5.94632 1.42222 5.69522 3.63622 5.19482L4.20862 5.06522C4.83773 4.92301 5.15183 4.85191 5.40473 4.66021C5.65673 4.46851 5.81873 4.17781 6.14273 3.59641L6.43793 3.06721Z" fill="#F6BA21"></path>
                                <path d="M34.4384 3.06721C35.5787 1.0224 36.1484 0 37.0007 0C37.853 0 38.4227 1.0224 39.563 3.06721L39.8582 3.59641C40.1822 4.17781 40.3442 4.46851 40.5962 4.66021C40.8482 4.85191 41.1632 4.92301 41.7932 5.06522L42.3656 5.19482C44.5796 5.69612 45.6858 5.94632 45.9495 6.79322C46.2123 7.63922 45.458 8.52213 43.9487 10.287L43.5581 10.7433C43.1297 11.2446 42.9146 11.4957 42.8183 11.8053C42.722 12.1158 42.7544 12.4506 42.8192 13.1193L42.8786 13.7286C43.1063 16.0839 43.2206 17.2612 42.5312 17.7841C41.8418 18.3079 40.805 17.83 38.7332 16.8759L38.1959 16.6293C37.6073 16.3575 37.313 16.2225 37.0007 16.2225C36.6884 16.2225 36.3941 16.3575 35.8055 16.6293L35.2691 16.8759C33.1964 17.83 32.1596 18.307 31.4711 17.785C30.7808 17.2612 30.8951 16.0839 31.1228 13.7286L31.1822 13.1202C31.247 12.4506 31.2794 12.1158 31.1822 11.8062C31.0868 11.4957 30.8717 11.2446 30.4433 10.7442L30.0527 10.287C28.5434 8.52303 27.7892 7.64012 28.052 6.79322C28.3157 5.94632 29.4227 5.69522 31.6367 5.19482L32.2091 5.06522C32.8382 4.92301 33.1523 4.85191 33.4052 4.66021C33.6572 4.46851 33.8192 4.17781 34.1432 3.59641L34.4384 3.06721Z" fill="#F6BA21"></path>
                                <path d="M62.4389 3.06721C63.5792 1.0224 64.1489 0 65.0012 0C65.8535 0 66.4232 1.0224 67.5635 3.06721L67.8587 3.59641C68.1827 4.17781 68.3447 4.46851 68.5967 4.66021C68.8487 4.85191 69.1637 4.92301 69.7937 5.06522L70.3661 5.19482C72.5801 5.69612 73.6862 5.94632 73.9499 6.79322C74.2127 7.63922 73.4585 8.52213 71.9492 10.287L71.5586 10.7433C71.1302 11.2446 70.9151 11.4957 70.8188 11.8053C70.7225 12.1158 70.7549 12.4506 70.8197 13.1193L70.8791 13.7286C71.1068 16.0839 71.2211 17.2612 70.5317 17.7841C69.8423 18.3079 68.8055 17.83 66.7337 16.8759L66.1964 16.6293C65.6078 16.3575 65.3135 16.2225 65.0012 16.2225C64.6889 16.2225 64.3946 16.3575 63.806 16.6293L63.2696 16.8759C61.1969 17.83 60.1601 18.307 59.4716 17.785C58.7813 17.2612 58.8956 16.0839 59.1233 13.7286L59.1827 13.1202C59.2475 12.4506 59.2799 12.1158 59.1827 11.8062C59.0873 11.4957 58.8722 11.2446 58.4438 10.7442L58.0532 10.287C56.5439 8.52303 55.7897 7.64012 56.0525 6.79322C56.3162 5.94632 57.4232 5.69522 59.6372 5.19482L60.2096 5.06522C60.8387 4.92301 61.1528 4.85191 61.4057 4.66021C61.6577 4.46851 61.8197 4.17781 62.1437 3.59641L62.4389 3.06721Z" fill="#F6BA21"></path>
                                <path d="M90.4394 3.06721C91.5797 1.0224 92.1494 0 93.0017 0C93.854 0 94.4237 1.0224 95.564 3.06721L95.8592 3.59641C96.1832 4.17781 96.3452 4.46851 96.5972 4.66021C96.8492 4.85191 97.1642 4.92301 97.7942 5.06522L98.3666 5.19482C100.581 5.69612 101.687 5.94632 101.95 6.79322C102.213 7.63922 101.459 8.52213 99.9497 10.287L99.5591 10.7433C99.1307 11.2446 98.9156 11.4957 98.8193 11.8053C98.723 12.1158 98.7554 12.4506 98.8202 13.1193L98.8796 13.7286C99.1073 16.0839 99.2216 17.2612 98.5322 17.7841C97.8428 18.3079 96.806 17.83 94.7342 16.8759L94.1969 16.6293C93.6083 16.3575 93.314 16.2225 93.0017 16.2225C92.6894 16.2225 92.3951 16.3575 91.8065 16.6293L91.2701 16.8759C89.1974 17.83 88.1606 18.307 87.4721 17.785C86.7818 17.2612 86.8961 16.0839 87.1238 13.7286L87.1832 13.1202C87.248 12.4506 87.2804 12.1158 87.1832 11.8062C87.0878 11.4957 86.8727 11.2446 86.4443 10.7442L86.0537 10.287C84.5444 8.52303 83.7902 7.64012 84.053 6.79322C84.3167 5.94632 85.4237 5.69522 87.6377 5.19482L88.2101 5.06522C88.8392 4.92301 89.1533 4.85191 89.4062 4.66021C89.6582 4.46851 89.8202 4.17781 90.1442 3.59641L90.4394 3.06721Z" fill="#F6BA21"></path>
                                <path d="M118.44 3.06721C119.58 1.0224 120.15 0 121.002 0C121.854 0 122.424 1.0224 123.564 3.06721L123.86 3.59641C124.184 4.17781 124.346 4.46851 124.598 4.66021C124.85 4.85191 125.165 4.92301 125.795 5.06522L126.367 5.19482C128.581 5.69612 129.687 5.94632 129.951 6.79322C130.214 7.63922 129.46 8.52213 127.95 10.287L127.56 10.7433C127.131 11.2446 126.916 11.4957 126.82 11.8053C126.724 12.1158 126.756 12.4506 126.821 13.1193L126.88 13.7286C127.108 16.0839 127.222 17.2612 126.533 17.7841C125.843 18.3079 124.807 17.83 122.735 16.8759L122.197 16.6293C121.609 16.3575 121.314 16.2225 121.002 16.2225C120.69 16.2225 120.396 16.3575 119.807 16.6293L119.271 16.8759C117.198 17.83 116.161 18.307 115.473 17.785C114.782 17.2612 114.897 16.0839 115.124 13.7286L115.184 13.1202C115.248 12.4506 115.281 12.1158 115.184 11.8062C115.088 11.4957 114.873 11.2446 114.445 10.7442L114.054 10.287C112.545 8.52303 111.791 7.64012 112.053 6.79322C112.317 5.94632 113.424 5.69522 115.638 5.19482L116.211 5.06522C116.84 4.92301 117.154 4.85191 117.407 4.66021C117.659 4.46851 117.821 4.17781 118.145 3.59641L118.44 3.06721Z" fill="#E9E9E9"></path>
                            </svg>
                        </div>
                        <div class="review-title">Vendor posted a review on Thai's Taste Restaurant</div>

                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-lg-end justify-content-between">
                            <div class="date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                    <path d="M3.2 7.2H4.8V8.8H3.2V7.2ZM3.2 10.4H4.8V12H3.2V10.4ZM6.4 7.2H8V8.8H6.4V7.2ZM6.4 10.4H8V12H6.4V10.4ZM9.6 7.2H11.2V8.8H9.6V7.2ZM9.6 10.4H11.2V12H9.6V10.4Z" fill="#3576AF"></path>
                                    <path d="M1.6 16H12.8C13.6824 16 14.4 15.2824 14.4 14.4V3.2C14.4 2.3176 13.6824 1.6 12.8 1.6H11.2V0H9.6V1.6H4.8V0H3.2V1.6H1.6C0.7176 1.6 0 2.3176 0 3.2V14.4C0 15.2824 0.7176 16 1.6 16ZM12.8 4.8L12.8008 14.4H1.6V4.8H12.8Z" fill="#3576AF"></path>
                                </svg>
                                <span class="ml-2">20 Nov, 2023  |  13:57</span>
                            </div>
                            <button type="button" class="ml-3 btn btn-primary">See Reviews</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="star-rating">
                            <svg xmlns="http://www.w3.org/2000/svg" width="130" height="18" viewBox="0 0 130 18" fill="none">
                                <path d="M6.43793 3.06721C7.57823 1.0224 8.14793 0 9.00024 0C9.85254 0 10.4222 1.0224 11.5625 3.06721L11.8577 3.59641C12.1817 4.17781 12.3437 4.46851 12.5957 4.66021C12.8477 4.85191 13.1628 4.92301 13.7928 5.06522L14.3652 5.19482C16.5792 5.69612 17.6853 5.94632 17.949 6.79322C18.2118 7.63922 17.4576 8.52213 15.9483 10.287L15.5577 10.7433C15.1293 11.2446 14.9142 11.4957 14.8179 11.8053C14.7216 12.1158 14.754 12.4506 14.8188 13.1193L14.8782 13.7286C15.1059 16.0839 15.2202 17.2612 14.5308 17.7841C13.8414 18.3079 12.8045 17.83 10.7327 16.8759L10.1954 16.6293C9.60684 16.3575 9.31254 16.2225 9.00024 16.2225C8.68794 16.2225 8.39364 16.3575 7.80503 16.6293L7.26863 16.8759C5.19593 17.83 4.15912 18.307 3.47062 17.785C2.78032 17.2612 2.89462 16.0839 3.12232 13.7286L3.18172 13.1202C3.24652 12.4506 3.27892 12.1158 3.18172 11.8062C3.08632 11.4957 2.87122 11.2446 2.44282 10.7442L2.05222 10.287C0.542913 8.52303 -0.211289 7.64012 0.0515116 6.79322C0.315212 5.94632 1.42222 5.69522 3.63622 5.19482L4.20862 5.06522C4.83773 4.92301 5.15183 4.85191 5.40473 4.66021C5.65673 4.46851 5.81873 4.17781 6.14273 3.59641L6.43793 3.06721Z" fill="#F6BA21"></path>
                                <path d="M34.4384 3.06721C35.5787 1.0224 36.1484 0 37.0007 0C37.853 0 38.4227 1.0224 39.563 3.06721L39.8582 3.59641C40.1822 4.17781 40.3442 4.46851 40.5962 4.66021C40.8482 4.85191 41.1632 4.92301 41.7932 5.06522L42.3656 5.19482C44.5796 5.69612 45.6858 5.94632 45.9495 6.79322C46.2123 7.63922 45.458 8.52213 43.9487 10.287L43.5581 10.7433C43.1297 11.2446 42.9146 11.4957 42.8183 11.8053C42.722 12.1158 42.7544 12.4506 42.8192 13.1193L42.8786 13.7286C43.1063 16.0839 43.2206 17.2612 42.5312 17.7841C41.8418 18.3079 40.805 17.83 38.7332 16.8759L38.1959 16.6293C37.6073 16.3575 37.313 16.2225 37.0007 16.2225C36.6884 16.2225 36.3941 16.3575 35.8055 16.6293L35.2691 16.8759C33.1964 17.83 32.1596 18.307 31.4711 17.785C30.7808 17.2612 30.8951 16.0839 31.1228 13.7286L31.1822 13.1202C31.247 12.4506 31.2794 12.1158 31.1822 11.8062C31.0868 11.4957 30.8717 11.2446 30.4433 10.7442L30.0527 10.287C28.5434 8.52303 27.7892 7.64012 28.052 6.79322C28.3157 5.94632 29.4227 5.69522 31.6367 5.19482L32.2091 5.06522C32.8382 4.92301 33.1523 4.85191 33.4052 4.66021C33.6572 4.46851 33.8192 4.17781 34.1432 3.59641L34.4384 3.06721Z" fill="#F6BA21"></path>
                                <path d="M62.4389 3.06721C63.5792 1.0224 64.1489 0 65.0012 0C65.8535 0 66.4232 1.0224 67.5635 3.06721L67.8587 3.59641C68.1827 4.17781 68.3447 4.46851 68.5967 4.66021C68.8487 4.85191 69.1637 4.92301 69.7937 5.06522L70.3661 5.19482C72.5801 5.69612 73.6862 5.94632 73.9499 6.79322C74.2127 7.63922 73.4585 8.52213 71.9492 10.287L71.5586 10.7433C71.1302 11.2446 70.9151 11.4957 70.8188 11.8053C70.7225 12.1158 70.7549 12.4506 70.8197 13.1193L70.8791 13.7286C71.1068 16.0839 71.2211 17.2612 70.5317 17.7841C69.8423 18.3079 68.8055 17.83 66.7337 16.8759L66.1964 16.6293C65.6078 16.3575 65.3135 16.2225 65.0012 16.2225C64.6889 16.2225 64.3946 16.3575 63.806 16.6293L63.2696 16.8759C61.1969 17.83 60.1601 18.307 59.4716 17.785C58.7813 17.2612 58.8956 16.0839 59.1233 13.7286L59.1827 13.1202C59.2475 12.4506 59.2799 12.1158 59.1827 11.8062C59.0873 11.4957 58.8722 11.2446 58.4438 10.7442L58.0532 10.287C56.5439 8.52303 55.7897 7.64012 56.0525 6.79322C56.3162 5.94632 57.4232 5.69522 59.6372 5.19482L60.2096 5.06522C60.8387 4.92301 61.1528 4.85191 61.4057 4.66021C61.6577 4.46851 61.8197 4.17781 62.1437 3.59641L62.4389 3.06721Z" fill="#F6BA21"></path>
                                <path d="M90.4394 3.06721C91.5797 1.0224 92.1494 0 93.0017 0C93.854 0 94.4237 1.0224 95.564 3.06721L95.8592 3.59641C96.1832 4.17781 96.3452 4.46851 96.5972 4.66021C96.8492 4.85191 97.1642 4.92301 97.7942 5.06522L98.3666 5.19482C100.581 5.69612 101.687 5.94632 101.95 6.79322C102.213 7.63922 101.459 8.52213 99.9497 10.287L99.5591 10.7433C99.1307 11.2446 98.9156 11.4957 98.8193 11.8053C98.723 12.1158 98.7554 12.4506 98.8202 13.1193L98.8796 13.7286C99.1073 16.0839 99.2216 17.2612 98.5322 17.7841C97.8428 18.3079 96.806 17.83 94.7342 16.8759L94.1969 16.6293C93.6083 16.3575 93.314 16.2225 93.0017 16.2225C92.6894 16.2225 92.3951 16.3575 91.8065 16.6293L91.2701 16.8759C89.1974 17.83 88.1606 18.307 87.4721 17.785C86.7818 17.2612 86.8961 16.0839 87.1238 13.7286L87.1832 13.1202C87.248 12.4506 87.2804 12.1158 87.1832 11.8062C87.0878 11.4957 86.8727 11.2446 86.4443 10.7442L86.0537 10.287C84.5444 8.52303 83.7902 7.64012 84.053 6.79322C84.3167 5.94632 85.4237 5.69522 87.6377 5.19482L88.2101 5.06522C88.8392 4.92301 89.1533 4.85191 89.4062 4.66021C89.6582 4.46851 89.8202 4.17781 90.1442 3.59641L90.4394 3.06721Z" fill="#F6BA21"></path>
                                <path d="M118.44 3.06721C119.58 1.0224 120.15 0 121.002 0C121.854 0 122.424 1.0224 123.564 3.06721L123.86 3.59641C124.184 4.17781 124.346 4.46851 124.598 4.66021C124.85 4.85191 125.165 4.92301 125.795 5.06522L126.367 5.19482C128.581 5.69612 129.687 5.94632 129.951 6.79322C130.214 7.63922 129.46 8.52213 127.95 10.287L127.56 10.7433C127.131 11.2446 126.916 11.4957 126.82 11.8053C126.724 12.1158 126.756 12.4506 126.821 13.1193L126.88 13.7286C127.108 16.0839 127.222 17.2612 126.533 17.7841C125.843 18.3079 124.807 17.83 122.735 16.8759L122.197 16.6293C121.609 16.3575 121.314 16.2225 121.002 16.2225C120.69 16.2225 120.396 16.3575 119.807 16.6293L119.271 16.8759C117.198 17.83 116.161 18.307 115.473 17.785C114.782 17.2612 114.897 16.0839 115.124 13.7286L115.184 13.1202C115.248 12.4506 115.281 12.1158 115.184 11.8062C115.088 11.4957 114.873 11.2446 114.445 10.7442L114.054 10.287C112.545 8.52303 111.791 7.64012 112.053 6.79322C112.317 5.94632 113.424 5.69522 115.638 5.19482L116.211 5.06522C116.84 4.92301 117.154 4.85191 117.407 4.66021C117.659 4.46851 117.821 4.17781 118.145 3.59641L118.44 3.06721Z" fill="#E9E9E9"></path>
                            </svg>
                        </div>
                        <div class="review-title">Vendor posted a review on Thai's Taste Restaurant</div>

                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-lg-end justify-content-between">
                            <div class="date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                    <path d="M3.2 7.2H4.8V8.8H3.2V7.2ZM3.2 10.4H4.8V12H3.2V10.4ZM6.4 7.2H8V8.8H6.4V7.2ZM6.4 10.4H8V12H6.4V10.4ZM9.6 7.2H11.2V8.8H9.6V7.2ZM9.6 10.4H11.2V12H9.6V10.4Z" fill="#3576AF"></path>
                                    <path d="M1.6 16H12.8C13.6824 16 14.4 15.2824 14.4 14.4V3.2C14.4 2.3176 13.6824 1.6 12.8 1.6H11.2V0H9.6V1.6H4.8V0H3.2V1.6H1.6C0.7176 1.6 0 2.3176 0 3.2V14.4C0 15.2824 0.7176 16 1.6 16ZM12.8 4.8L12.8008 14.4H1.6V4.8H12.8Z" fill="#3576AF"></path>
                                </svg>
                                <span class="ml-2">20 Nov, 2023  |  13:57</span>
                            </div>
                            <button type="button" class="ml-3 btn btn-primary">See Reviews</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center my-4">
                <div class="col-sm-12">
                    <ul class="pagination justify-content-center mb-sm-0">
                        <li class="page-item disabled">
                            <a href="#" class="page-link"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            ...
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">10</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link"><i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


</div>
@endsection