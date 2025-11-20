<?php get_header(); ?>

<style>
  .single-wrapper {
    max-width: 800px;
    margin: 50px auto;
    background: #fff;
    padding: 40px;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    background-color: #FCFAF5;
  }

  .single-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    border-bottom: 1px solid #f0f0f0;

  }

  .single-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 3rem;
    line-height: 1.3;
    margin-left: 0px;
  }



  .single-date {
    position: absolute;
    right: 20px;
    /* hoặc right: 0 nếu muốn sát mép */
    top: 20px;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #f4d26b;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
  }


  .date-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 70%;
    /* giúp khoảng cách giữa ngày và tháng đẹp hơn */
  }

  .date-right {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 5px;
  }

  .single-content {
    margin-top: 3rem;
  }

  .single-content p {
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 15px;
  }

  /*  */
  @media (max-width: 600px) {
    .single-header {
      flex-direction: row;
      align-items: center;
    }

    .single-title {
      font-size: 22px;
    }

    .single-date {
      width: 55px;
      height: 55px;
      font-size: 12px;
    }
  }
</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="single-wrapper">

      <div class="single-header">
        <h1 class="single-title"><?php the_title(); ?></h1>

        <div class="single-date">
          <div class="date-left">
            <span><?php echo get_the_date('d'); ?></span>
            <span><?php echo get_the_date('m'); ?></span>
          </div>
          <div class="date-right">
            <span><?php echo get_the_date('y'); ?></span>
          </div>
        </div>
      </div>

      <div class="single-content">
        <?php the_content(); ?>
      </div>

    </div>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>