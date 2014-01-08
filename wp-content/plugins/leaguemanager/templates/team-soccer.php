<?php
/**
Template page to display single team

The following variables are usable:
	
	$league: league object
	$team: team object
	$next_match: next match object
	$prev_match: previous match object

	You can check the content of a variable when you insert the tag <?php var_dump($variable) ?>
*/
?>

<div class="teampage">

	<h3><?php echo $team->title ?></h3>

	<?php if ( isset($_GET['show']) ) : ?>
		<!-- Single Team Member -->
		<?php dataset($_GET['show']); ?>
	<?php else : ?>

	<p class="logo"><img src="<?php echo $team->logo ?>" alt="<?php _e( 'Logo', 'leaguemanager' ) ?>" /></p>
	
	<dl>
		<dt><?php _e( 'Rank', 'leaguemanager' ) ?></dt><dd><?php echo $team->rank ?></dd>
		<dt><?php _e( 'Matches', 'leaguemanager' ) ?></dt><dd><?php echo $team->done_matches ?></dd>
		<dt><?php _e( 'Won Games', 'leaguemanager' ) ?></dt><dd><?php echo $team->won_matches ?></dd>
		<dt><?php _e( 'Tie Games', 'leaguemanager' ) ?></dt><dd><?php echo $team->draw_matches ?></dd>
		<dt><?php _e( 'Lost Games', 'leaguemanager' ) ?></dt><dd><?php echo $team->lost_matches ?></dd>
		<dt><?php _e( 'Coach', 'leaguemanager' ) ?></dt><dd><?php echo $team->coach ?></dd>
    <?php 
    if ($team->title == 'Pozzo'){
		  echo "<dt>Allenatore in seconda</dt><dd>Polleghini Cristian</dd>";
    }
    ?>
<?php/*
		<dt><?php _e( 'Website', 'leaguemanager' ) ?></dt><dd><a href="http://<?php echo $team->website ?>" target="_blank"><?php echo $team->website ?></a></dd>
*/ ?>
	</dl>

	<div class="matches" style="text-align: center;width: 100%;">
	<?php if ( $next_match ) : ?>
	<div class="next_match" style="margin-bottom:20px;">
		<h4><?php _e( 'Next Match','leaguemanager' ) ?></h4>
<?php
$teams = $leaguemanager->getTeams( 'league_id = 1', "`id` ASC", 'ARRAY' );
?>
		<p class="match"><?php echo "<img class='home_logo' src='".$teams[$next_match->home_team]['logo']."' alt='Logo ".$teams[$next_match->home_team]['title']."' style='margin-right: 20px;width:50px;'/>" . $next_match->match . "<img class='away_logo' src='".$teams[$next_match->away_team]['logo']."' alt='Logo ".$teams[$next_match->away_team]['title']."' style='margin-left: 20px;width:50px;'/>"?></p>
		<p class='match_day'><?php printf(__("<strong>%d.</strong> Match Day", 'leaguemanager'), $next_match->match_day); ?></p>

		<?php $time = ( '00:00' == $next_match->hour.":".$next_match->minutes ) ? '' : mysql2date(get_option('time_format'), $next_match->date); ?>
		<div class='match_date'><?php echo mysql2date("j. F Y", $next_match->date) ?></div>
    <div class='time'><?php echo $time ?></div> 
    <div class='location'><?php echo $next_match->location ?></div>
	</div>
	<?php endif; ?>
<?php 
//$teams = $leaguemanager->getTeams( 'league_id = 1', "`id` ASC", 'ARRAY' );
//var_dump($next_match->home_team);
//echo "<p class='logos'><img class='home_logo' src='".$teams[$next_match->home_team]['logo']."' alt='' /><img class='away_logo' src='".$teams[$next_match->away_team]['logo']."' alt='' /></p>";
?>
	<?php if ( $prev_match ) : ?>
	<div class="prev_match">
		<h4><?php _e( 'Last Match','leaguemanager' ) ?></h4>
		<p class="match"><?php echo $prev_match->match ?></p>
		<p class='match_day'><?php printf(__("<strong>%d.</strong> Match Day", 'leaguemanager'), $prev_match->match_day); ?></p>
		<p class="score"><?php echo $prev_match->score ?></p>
	</div>
	<?php endif; ?>
	</div>

	<?php if ( !empty($team->roster['id']) && function_exists('project') ) : ?>
<!--		<h4 style="clear: both;"><?php _e( 'Team Roster', 'leaguemanager' ) ?></h4>-->
	
		<table class="projectmanager footable" data-filter="#filter">
			<thead>
				<tr>
					<th scope="col" class="tableheader footable-first-column footable-sortable">Nome<span class="footable-sort-indicator"></span></th>
					<th scope="col" class="tableheader date footable-sortable">Data di nascita<span class="footable-sort-indicator"></span></th>
					<th scope="col" class="tableheader select footable-last-column footable-sortable" data-hide="phone">Ruolo<span class="footable-sort-indicator"></span></th>
					<th scope="col" class="tableheader formazione footable-sortable" data-hide="phone,tablet,phone" style="display: none;">Presenze<span class="footable-sort-indicator"></span></th>
					<th scope="col" class="tableheader gol footable-sortable" data-hide="tablet,phone" style="display: none;">Reti<span class="footable-sort-indicator"></span></th>
					<th scope="col" class="tableheader ammonizioni footable-sortable" data-hide="tablet,phone" style="display: none;">Ammonizioni<span class="footable-sort-indicator"></span></th>
					<th scope="col" class="tableheader espulsioni footable-sortable" data-hide="tablet,phone" style="display: none;">Espulsioni<span class="footable-sort-indicator"></span></th></tr>
				</tr>
			</thead>
			<tbody>
				<?php
        $args = array(
          		'post_type' => 'giocatori',
          		'post_status' => 'publish',
          		'posts_per_page' => -1,
							'meta_query' => array(
								array(
									'key' => 'tipo',
									'value' => 'giocatore',
								)
							),
							'orderby'          => 'title',
							'order'            => 'ASC',
          );
        //query_posts($args);
        $posts_array = get_posts( $args );
        foreach ( $posts_array as $post ) : setup_postdata( $post );
      	?>
				<tr class="">
					<td class="name">
						<a href="<?php echo get_bloginfo('url');?>/giocatori/<?php echo $post->post_name;?>"><?php echo get_post_meta( $post->ID, 'cognome', true ) . " " . get_post_meta( $post->ID, 'nome', true );?></a>
					</td>
					<td class="date "><?php echo date("d M Y", strtotime(get_post_meta( $post->ID, 'data_di_nascita', true ))); ?></td>
					<td class="select  footable-last-column"><?php echo get_post_meta( $post->ID, 'ruolo', true ) ?></td>
					<td class="formazione " style="display: none;"><?php echo get_post_meta( $post->ID, 'presenze', true ) ?></td>
					<td class="gol " style="display: none;"><?php echo get_post_meta( $post->ID, 'gol', true ) ?></td>
					<td class="ammonizioni " style="display: none;"><?php echo get_post_meta( $post->ID, 'ammonizioni', true ) ?></td>
					<td class="espulsioni " style="display: none;"><?php echo get_post_meta( $post->ID, 'espulsioni', true ) ?></td>
				</tr>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</tbody>
		</table>
		<?php
			$arrayPresenze = array();
			$arrayPresenze = getArrayPresenze();

			foreach ( $arrayPresenze as $presenza ){
				widget_error_log($presenza['nome'] . ": " . $presenza['presenze'] . " presenze.");
			}
		?>
		<?php //project($team->roster['id'], array('selections' => false) ); ?>
	<?php endif; ?>
	
	<?php endif; ?>
</div>
