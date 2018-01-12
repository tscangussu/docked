<?php
  # WordPress debug mode
  define( 'WP_DEBUG', true );
  define( 'WP_ENV', getenv( 'WP_ENV' ) ?? 'dev' );
