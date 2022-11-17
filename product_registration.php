<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>관리자 페이지-공지사항</title>
</head>

<body id="manager_body">
    <main class="manager_wrapper registration">
        <div class="main_menu_wrapper">
            <a href="manager_home.php">
                <div class="menu"> 홈 </div>
            </a>
            <a href="manager_notice.php">
                <div class="menu"> 공지사항 관리 </div>
            </a>
            <a href="manager_product.php">
                <div class="menu" style="background-color:  rgb(15, 162, 162);"> 상품 관리 </div>
            </a>
            <a href="">
                <div class="menu"> 이벤트 관리 </div>
            </a>
            <a href="">
                <div class="menu"> 고객 문의 관리 </div>
            </a>
        </div>

        <div class="main_registration">
            <header>
                <div class="title_and_registration">
                    <span class="title">상품 등록</span>
                </div>
            </header>
            <section class="contents">
                
                <article class="scroller">
                    <form action="contents_insert.php" method="POST">
                        <section class="board product">
                            <div class="point_img">
                                <div class="point_title"> 대표 이미지 </div>
                                <div class="point_img_contents">
                                    <div class="point_img_content">
                                        <div class="point_img_wrapper"><input type="text" name="product_img" value="img/contents/content10.jpg"></div>
                                    </div>
                                    <div class="point_img_content">
                                        <div class="point_img_wrapper"></div>
                                    </div>
                                    <div class="point_img_content">
                                        <div class="point_img_wrapper"></div>
                                    </div>
                                    <div class="point_img_content">
                                        <div class="point_img_wrapper"></div>
                                    </div>
                                    <div class="point_img_content_plus">
                                        <label class="input-file-button" for="input-file-img">
                                            <div class="point_img_plus"> + </div>
                                        </label>
                                        <input type="file" id="input-file-img" style="display: none;"
                                            accept=".jpg, .jpeg, .png">
                                    </div>
                                </div>
                                <div class="product_detail">
                                    <div class="product_board_three">
                                        <div class="product_code"> 상품코드 : <input type="text" name="product_code" class="text_product_code"></div>
                                        <div class="product_name"> 상품명 : <input type="text" name="product_name" class="text_product_name"></div>
                                        <div class="product_cost"> 상품 원가 : <input type="text" name="product_cost" class="text_product_cost">원</div>
                                        <div class="product_price"> 상품 가격 : <input type="text" name="product_price" class="text_product_price">원</div>
                                    </div>
                                    <div class="product_board_two">
                                        <div class="product_category"> 
                                            상품 카테고리 :
                                            <select>
                                                <option category> 카테고리 </option>
                                                <option> 아우터 </option>
                                                <option> 상의 </option>
                                                <option> 트레이닝 </option>
                                                <option> 베이직 </option>
                                                <option> 원피스 </option>
                                                <option> 스커트 </option>
                                                <option> 팬츠 </option>
                                                <option> 가방 </option>
                                                <option> 신발 </option>
                                                <option> 액세서리 </option>
                                            </select>
                                    </div>
                                        <div class="product_discount_rate"> 할인율 : <input type="text" name="product_discount_rate"class="text_product_discount" /> %</div>
                                        <div class="is_deliv_today"> 오늘배송 :
                                            <select name="is_deliv_today">
                                                <option> N </option>
                                                <option> Y </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_sign_up_col_title"> 상품 색상 등록 </div>
                                <div class="pro_sign_up_colors">
                                    <div class="pro_sign_up_color">
                                        <div class="product_color_wrapper"> color1 </div>
                                    </div>
                                    <div class="pro_sign_up_color">
                                        <div class="product_color_wrapper"> color2 </div>
                                    </div>
                                    <div class="pro_sign_up_color">
                                        <div class="product_color_wrapper"> color3 </div>
                                    </div>
                                    <div class="pro_sign_up_color">
                                        <div class="product_color_wrapper"> color4 </div>
                                    </div>
                                    <div class="pro_sign_up_color_plus">
                                        <label class="input-file-button" for="input-file-color">
                                            <div class="product_color_plus"> + </div>
                                        </label>
                                        <input type="file" id="input-file-color" style="display: none;">
                                    </div>
                                </div>
                                <div class="product_sign_up_size_title"> 상품 사이즈 등록 </div>
                                <div class="pro_sign_up_sizes">
                                    <div class="pro_sign_up_size">
                                        <div class="product_size_wrapper"> S </div>
                                    </div>
                                    <div class="pro_sign_up_size">
                                        <div class="product_size_wrapper"> M </div>
                                    </div>
                                    <div class="pro_sign_up_size">
                                        <div class="product_size_wrapper"> L </div>
                                    </div>
                                    <div class="pro_sign_up_size">
                                        <div class="product_size_wrapper"> XL </div>
                                    </div>
                                    <div class="pro_sign_up_size_plus">
                                        <label class="input-file-button" for="input-file-size">
                                            <div class="product_size_plus"> + </div>
                                        </label>
                                        <input type="file" id="input-file-size" style="display: none;">
                                    </div>
                                </div>
                                <div class="product_detail_explain_title">
                                    상품 상세 설명 페이지
                                    <label class="input-file-button" for="input-file">
                                        파일 등록
                                    </label>
                                    <input type="file" id="input-file" style="display: none;">
                                </div>
                                <div class="submit_wrapper">
                                        <label class="input-submit-button" for="input-submit">
                                            확인
                                        </label>
                                        <input type="submit" id="input-submit" style="display: none;">
                                </div>
                            </div>
                        </section>
                    </section>
                    </form>
                    
                </article>
            </section>
            
        </div>
    </main>
</body>

</html>