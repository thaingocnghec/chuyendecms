<?php
/**
 * Custom Search Template (Theo mẫu thầy - đầy đủ 13, 5, 14, 15)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
get_header();
?>

<style>
/* ===============================
   SEARCH PAGE LAYOUT
   =============================== */
.search-page {
    background-color: #f9f9f9;
    padding: 50px 0;
    font-family: "Segoe UI", sans-serif;
}
.search-layout {
    display: grid;
    grid-template-columns: 1fr 3fr 1.2fr; /* 13 - 5 - 14 */
    gap: 25px;
}
@media (max-width: 992px) {
    .search-layout {
        grid-template-columns: 1fr;
    }
}

/* ===============================
   MODULE 13 - BÀI VIẾT NỔI BẬT
   =============================== */
.sidebar-left {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.sidebar-left h4 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}
.featured-post {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    border-bottom: 1px solid #eee;
    padding-bottom: 15px;
}
.featured-post:last-child {
    border-bottom: none;
}
.featured-post img {
    width: 100%;
    height: 160px;
    border-radius: 8px;
    object-fit: cover;
}
.featured-post a {
    color: #333;
    font-weight: bold;
    text-decoration: none;
}
.featured-post a:hover {
    color: #007bff;
}

/* ===============================
   MODULE 5 - KẾT QUẢ TÌM KIẾM (mỗi bài 1 hàng)
   =============================== */
.search-results-box {
    background: #fff;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
.search-results-box h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 25px;
}

.search-results-list {
    display: flex;
    flex-direction: column;
    gap: 25px;
}
.search-row {
    display: flex;
    background: #fff;
    border-radius: 24px;
    overflow: hidden;
    border: 1px solid rgba(59, 130, 246, 0.12);
    box-shadow: 0 14px 32px rgba(15, 76, 129, 0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.search-row:hover {
    transform: translateY(-5px);
    box-shadow: 0 24px 48px rgba(15, 76, 129, 0.14);
}
.search-thumb {
    flex: 0 0 280px;
    max-width: 280px;
    min-height: 210px;
    background: #f3f4f6;
}
.search-thumb img {
    width: 100%;
    height: 100%;
    min-height: 210px;
    object-fit: cover;
}
.search-body {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 32px 40px;
}
.search-header {
    display: flex;
    gap: 22px;
    align-items: center;
    margin-bottom: 12px;
}
.search-title-wrap {
    display: flex;
    flex-direction: column;
    gap: 6px;
    flex: 1;
}
.search-date-box {
    min-width: 92px;
    background: #ffffff;
    border-radius: 18px;
    border: 1px solid rgba(59, 130, 246, 0.28);
    box-shadow: 0 10px 24px rgba(59, 130, 246, 0.12);
    padding: 12px 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    line-height: 1.1;
}
.search-date-box .date-day {
    font-size: 2.2rem;
    font-weight: 700;
    color: #1d4ed8;
}
.search-date-box .date-month {
    margin-top: 6px;
    font-size: 0.72rem;
    color: #1d4ed8;
    font-weight: 700;
    letter-spacing: 0.12em;
}
.search-date-box .date-year {
    margin-top: 2px;
    font-size: 0.75rem;
    color: #475569;
    font-weight: 600;
}
.search-title {
    font-size: 1.38rem;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 8px 0;
    line-height: 1.45;
}
.search-title a {
    color: inherit;
    text-decoration: none;
}
.search-title a:hover {
    color: #1d4ed8;
}
.search-meta {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 0.82rem;
    color: #1d4ed8;
    font-weight: 600;
}
.search-meta .meta-label {
    text-transform: uppercase;
    letter-spacing: 0.14em;
    color: #94a3b8;
}
.search-meta .meta-cats {
    display: flex;
    gap: 10px;
    font-weight: 700;
}
.search-meta .meta-cats a {
    color: inherit;
    text-decoration: none;
}
.search-meta .meta-cats a:hover {
    text-decoration: underline;
}
.search-desc {
    font-size: 0.95rem;
    color: #334155;
    line-height: 1.7;
    margin: 0;
}

@media (max-width: 992px) {
    .search-row {
        border-radius: 20px;
    }
    .search-thumb {
        flex: 0 0 230px;
        max-width: 230px;
    }
    .search-body {
        padding: 26px 30px;
    }
    .search-date-box {
        min-width: 84px;
    }
    .search-date-box .date-day {
        font-size: 2rem;
    }
    .search-title {
        font-size: 1.26rem;
    }
}

.no-results {
    margin: 40px 0 0;
}
.no-results-card {
    background: #fff;
    border-radius: 18px 18px 0 0;
    padding: 42px 30px 30px;
    text-align: center;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
}
.no-results-title {
    font-size: 24px;
    font-weight: 700;
    color: #d62828;
    margin: 0 0 12px 0;
}
.no-results-title span {
    color: #111827;
}
.no-results-text {
    font-size: 15px;
    color: #4b5563;
    margin: 0;
}
.no-results-form {
    background: #efe4d0;
    border-radius: 0 0 18px 18px;
    padding: 32px;
    border: 1px solid rgba(209, 213, 219, 0.6);
    border-top: none;
    box-shadow: 0 14px 28px rgba(0,0,0,0.06);
}
        .search-body {
            padding: 24px;
        }
        .search-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }
        .search-date-box {
            flex-direction: row;
            gap: 12px;
            padding: 12px 18px;
        }
        .search-date-box .date-day {
            font-size: 1.9rem;
        }
        .search-date-box .date-month,
        .search-date-box .date-year {
            margin-top: 0;
            letter-spacing: 0.08em;
        }
        .search-meta {
            flex-wrap: wrap;
            row-gap: 6px;
        }
    position: absolute;
    width: 16px;
    height: 16px;
    border: 2px solid #475569;
    border-radius: 50%;
    top: 0;
    left: 0;
}
.no-results-form .search-icon::after {
    content: '';
    position: absolute;
    width: 2px;
    height: 8px;
    background: #475569;
    transform: rotate(45deg);
    bottom: 0;
    right: 0;
    border-radius: 2px;
}
.no-results-form input[type="search"] {
    flex: 1;
    border: none;
    font-size: 16px;
    color: #1f2937;
    padding: 8px 4px;
    outline: none;
}
.no-results-form button {
    padding: 12px 30px;
    background: #28a745;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.no-results-form button:hover {
    background: #23893a;
}
.no-results-form button:focus {
    outline: 2px solid rgba(40, 167, 69, 0.4);
    outline-offset: 2px;
}
@media (max-width: 640px) {
    .no-results-form form {
        flex-direction: column;
        padding: 16px;
    }
    .no-results-form button {
        width: 100%;
        justify-content: center;
    }
}
@media (max-width: 768px) {
    .search-row {
        flex-direction: column;
    }
    .search-thumb {
        flex: none;
        max-width: 100%;
    }
    .search-body {
        flex-direction: column;
    }
    .search-date {
        flex: none;
        max-width: 100%;
        flex-direction: row;
        justify-content: center;
        gap: 14px;
        padding: 16px 0;
        border-bottom: 3px solid #1d4ed8;
    }
    .search-date::before,
    .search-date::after {
        display: none;
    }
    .search-text {
        padding: 24px;
    }
    .search-desc {
        max-width: 100%;
    }
}

/* ===============================
   MODULE 14 - BÌNH LUẬN NỔI BẬT
   =============================== */
.sidebar-right {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.sidebar-right h4 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}
.comment-box {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.comment {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    background: #f9f9f9;
    border-radius: 6px;
    padding: 10px;
}
.comment.reply {
    margin-left: 40px;
    background: #f2f2f2;
}
.comment .avatar img {
    border-radius: 50%;
}
.comment .content {
    flex: 1;
}
.comment .content strong {
    font-weight: bold;
    color: #333;
}
.comment .content p {
    font-size: 14px;
    color: #444;
    line-height: 1.5;
    margin: 5px 0 0 0;
}
.comment .content a {
    font-size: 13px;
    color: #007bff;
}

/* ===============================
   MODULE 15 - LATEST NEWS
   =============================== */
.latest-news-box {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 24px rgba(15, 23, 42, 0.08);
    padding: 36px 48px;
    margin-top: 40px;
    grid-column: 1 / -1;
    position: relative;
}
.latest-news-box h2 {
    font-size: 22px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 28px;
    position: relative;
}
.latest-news-box h2::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -14px;
    width: 72px;
    height: 3px;
    background: #1d4ed8;
    border-radius: 999px;
}
.latest-news-timeline {
    position: relative;
    padding-left: 24px;
}
.latest-news-timeline::before {
    content: "";
    position: absolute;
    left: 10px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #c7d2fe;
}
.news-item {
    position: relative;
    padding: 18px 0 18px 32px;
}
.news-item:not(:last-child) {
    border-bottom: 1px solid rgba(148, 163, 184, 0.25);
}
.news-item::before {
    content: "";
    position: absolute;
    left: 3px;
    top: 26px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    border: 3px solid #1d4ed8;
    background: #fff;
    box-shadow: none;
}
.news-item h3 {
    font-size: 18px;
    margin: 0 0 6px;
}
.news-title {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #1d4ed8;
    font-weight: 600;
    text-decoration: none;
}
.news-title:hover {
    text-decoration: underline;
}
.news-meta {
    display: flex;
    align-items: baseline;
    gap: 12px;
    margin-bottom: 6px;
    width: 100%;
}
.news-title {
    flex: 1;
}
.news-date {
    font-size: 14px;
    color: #1d4ed8;
    font-weight: 600;
    text-align: right;
    flex-shrink: 0;
}
.news-excerpt {
    font-size: 14px;
    color: #4a5568;
    line-height: 1.6;
    margin: 0;
}


/* ===============================
   PHÂN TRANG
   =============================== */
.pagination {
    margin-top: 30px;
    text-align: center;
}
</style>

<section class="search-page">
    <div class="container">

        <!-- Hàng chính: 13 - 5 - 14 -->
        <div class="search-layout">

            <!-- MODULE 13 -->
            <div class="sidebar-left">
                <h4>Bài viết nổi bật</h4>
                <?php
                $featured_posts = get_posts([
                    'numberposts' => 3,
                    'post_status' => 'publish'
                ]);
                foreach ($featured_posts as $post) :
                ?>
                    <div class="featured-post">
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                            <?php else : ?>
                                <img src="https://via.placeholder.com/400x250?text=No+Image" alt="">
                            <?php endif; ?>
                            <div class="featured-title"><?php echo esc_html($post->post_title); ?></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- MODULE 5 -->
            <div class="search-results-box">
                <h2>Kết quả tìm kiếm cho: "<strong><?php echo get_search_query(); ?></strong>"</h2>

                <?php if (have_posts()) : ?>
                    <div class="search-results-list">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php 
                                $day = get_the_date('d');
                                $categories = get_the_category();
                                $category_links = [];
                                if ( $categories ) {
                                    foreach ( $categories as $cat ) {
                                        $category_links[] = '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
                                    }
                                }
                            ?>
                            <div class="search-row">
                                <div class="search-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium_large');
                                        } else {
                                            echo '<img src="https://via.placeholder.com/400x250?text=No+Image" alt="">';
                                        } ?>
                                    </a>
                                </div>
                                <div class="search-body">
                                    <div class="search-header">
                                        <div class="search-date-box">
                                            <span class="date-day"><?php echo esc_html( $day ); ?></span>
                                            <span class="date-month">THÁNG <?php echo esc_html( get_the_date( 'm' ) ); ?></span>
                                            <span class="date-year"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
                                        </div>
                                        <div class="search-title-wrap">
                                            <h3 class="search-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <?php if ( ! empty( $category_links ) ) : ?>
                                                <div class="search-meta">
                                                    <span class="meta-label"><?php esc_html_e( 'Categories', 'twentytwenty' ); ?></span>
                                                    <span class="meta-cats"><?php echo implode( '&nbsp;', $category_links ); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <p class="search-desc"><?php echo wp_trim_words( get_the_excerpt(), 24, '...' ); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination">
                        <?php the_posts_pagination([
                            'mid_size' => 2,
                            'prev_text' => __('← Trước'),
                            'next_text' => __('Sau →'),
                        ]); ?>
                    </div>
                <?php else : ?>
                    <div class="no-results">
                        <div class="no-results-card">
                            <h3 class="no-results-title">Search: <span>"<?php echo esc_html( get_search_query() ); ?>"</span></h3>
                            <p class="no-results-text">We could not find any results for your search. You can give it another try through the search form below.</p>
                        </div>
                        <div class="no-results-form">
                            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <label for="no-results-search-field" class="screen-reader-text"><?php esc_html_e( 'Search for:', 'twentytwenty' ); ?></label>
                                <div class="search-field-wrapper">
                                    <span class="search-icon" aria-hidden="true"></span>
                                    <input id="no-results-search-field" type="search" name="s" placeholder="Search topics or keywords" value="<?php echo esc_attr( get_search_query() ); ?>" required>
                                </div>
                                <button type="submit"><?php esc_html_e( 'Search', 'twentytwenty' ); ?></button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- MODULE 14 -->
            <div class="sidebar-right">
                <h4>Bình luận nổi bật</h4>
                <div class="comment-box">
                    <?php
                    $recent_comments = get_comments([
                        'number' => 5,
                        'status' => 'approve',
                        'post_status' => 'publish'
                    ]);
                    if ($recent_comments) :
                        foreach ($recent_comments as $comment) :
                            $avatar = get_avatar($comment->comment_author_email, 45);
                            $author = $comment->comment_author;
                            $excerpt = wp_trim_words($comment->comment_content, 15, '...');
                            $post_link = get_permalink($comment->comment_post_ID);
                            $is_reply = $comment->comment_parent > 0 ? 'reply' : '';
                    ?>
                        <div class="comment <?php echo $is_reply; ?>">
                            <div class="avatar"><?php echo $avatar; ?></div>
                            <div class="content">
                                <strong><?php echo esc_html($author); ?></strong>
                                <p><?php echo esc_html($excerpt); ?></p>
                                <a href="<?php echo esc_url($post_link); ?>">Xem bài viết</a>
                            </div>
                        </div>
                    <?php endforeach;
                    else :
                        echo '<p>Chưa có bình luận nào.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div> <!-- end .search-layout -->
<!-- MODULE 15 -->
            <div class="latest-news-box">
                <h2>Latest News</h2>
                <div class="latest-news-timeline">
                <?php
                $recent_posts = get_posts(['numberposts' => 3, 'post_status' => 'publish']);
                foreach ($recent_posts as $post) :
                ?>
                    <div class="news-item">
                        <div class="news-meta">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="news-title"><?php echo esc_html($post->post_title); ?></a>
                            <span class="news-date"><?php echo get_the_date('d F, Y', $post->ID); ?></span>
                        </div>
                        <p class="news-excerpt"><?php echo wp_trim_words(get_the_excerpt($post->ID), 24, '...'); ?></p>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
    </div>
</section>

<?php get_footer(); ?>