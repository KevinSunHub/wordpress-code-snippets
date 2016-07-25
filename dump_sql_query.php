add_filter( 'query', 'log_queries' );

/**
 * Write the SQL to a file.
 *
 * @wp-hook query
 * @param   string $query
 * @return  string Unchanged query
 */
function log_queries( $query )
{
  static $first = TRUE;
  //Change the path here.
  $log_path = ABSPATH.'query-log.sql';
  $header = '';

  if ( $first )
  {
  $time = date( 'Y-m-d H:i:s' );
  $request = $_SERVER['REQUEST_URI'];
  $header = "\n\n# -- Request URI: $request, Time: $time ------------\n";
  $first = FALSE;
  }

  file_put_contents( $log_path, "$header\n$query", FILE_APPEND | LOCK_EX );

  return $query;
}
