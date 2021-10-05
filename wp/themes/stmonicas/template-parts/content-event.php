<div class="event-summary">
  <a href="<?php the_permalink(); ?>" class="event-summary__date">
    <span class="event-summary__month"><?php $eventDate = new DateTime(get_field('event_date'));
    echo $eventDate->format('M') ?></span>
    <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>
  </a>
  <div class="event-summary__content">
    <h5 class="event-summary__post-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h5>
    <p class="event-summary__post-text"><?php if (has_excerpt()) {
        echo get_the_excerpt();
      } else {
        echo wp_trim_words(get_the_content(), 18);
        } ?>
      <a href="<?php the_permalink(); ?>" class="lm gray">Learn More</a>
    </p>
  </div>
</div>