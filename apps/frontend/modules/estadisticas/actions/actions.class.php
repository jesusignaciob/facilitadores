<?php

/**
 * estadisticas actions.
 *
 * @package    facilitadores
 * @subpackage estadisticas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estadisticasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }

public function executeLinea(sfWebRequest $request)
  {
  }

public function executeBarra(sfWebRequest $request)
  {
  }
  
public function executePorEstado(sfWebRequest $request)
  {
    $this->estatusValor = $request->getParameter('estatusAreaFormacion');
    
    $this->setTemplate('porEstado');
  }
  
public function executeGenerarGrafico(sfWebRequest $request)
  {
    
  }

public function executeCircular(sfWebRequest $request)
  {
  }




public function executeGraficoBarras()
{
  $chartData = array();
 
  //Array with sample random data
  for( $i = 0; $i < 25; $i++ )
  {
    $chartData[] = rand(1,20);
  }
 
  //To create a bar chart we need to create a stBarOutline Object
  $bar = new stBarOutline( 80, '#78B9EC', '#3495FE' );
  $bar->key( 'Porcentaje por Estado', 10 );
 
  //Passing the random data to bar chart
  $bar->data = $chartData;
 
  //Creating a stGraph object
  $g = new stGraph();
  $g->title( '% Facilitadores por Estados', '{font-size: 20px;}' );
  $g->bg_colour = '#E4F5FC';
  $g->set_inner_background( '#E3F0FD', '#CBD7E6', 150 );
  $g->x_axis_colour( '#8499A4', '#E4F5FC' );
  $g->y_axis_colour( '#8499A4', '#E4F5FC' );
 
  //Pass stBarOutline object i.e. $bar to graph
  $g->data_sets[] = $bar;
 
  //Setting labels for X-Axis
  $estados = Doctrine_Core::getTable('Estado')->getEstados();
  foreach ($estados as $e){
      $lista_estados[] = $e->getNombreEstado(); 
  }
  //$g->set_x_labels(array( 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday' ));
  $g->set_x_labels($lista_estados);
  // to set the format of labels on x-axis e.g. font, color, step
  $g->set_x_label_style( 10, '#18A6FF', 1 );
 
  // To tick the values on x-axis
  // 2 means tick every 2nd value
  $g->set_x_axis_steps( 1 );
 
  //set maximum value for y-axis
  //we can fix the value as 20, 10 etc.
  //but its better to use max of data
  $g->set_y_max( max($chartData) );
  $g->y_label_steps( 10 );
  $g->set_y_legend( 'Porcentaje', 12, '#18A6FF' );
  echo $g->render();
 
  return sfView::NONE;
}

public function executeGraficoPorEstados()
{
  $chartData = array();
 
  //Array with sample random data
  for( $i = 0; $i < 25; $i++ )
  {
    $chartData[] = rand(1,20);
  }
 
  //To create a bar chart we need to create a stBarOutline Object
  $bar = new stBarOutline( 80, '#78B9EC', '#3495FE' );
  $bar->key( 'Porcentaje por Estado', 10 );
 
  //Passing the random data to bar chart
  $bar->data = $chartData;
 
  //Creating a stGraph object
  $g = new stGraph();
  $g->title( '% Facilitadores por Estados', '{font-size: 20px;}' );
  $g->bg_colour = '#E4F5FC';
  $g->set_inner_background( '#E3F0FD', '#CBD7E6', 150 );
  $g->x_axis_colour( '#8499A4', '#E4F5FC' );
  $g->y_axis_colour( '#8499A4', '#E4F5FC' );
 
  //Pass stBarOutline object i.e. $bar to graph
  $g->data_sets[] = $bar;
 
  //Setting labels for X-Axis
  $estados = Doctrine_Core::getTable('Estado')->getEstados();
  foreach ($estados as $e){
      $lista_estados[] = $e->getNombreEstado(); 
  }
  //$g->set_x_labels(array( 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday' ));
  $g->set_x_labels($lista_estados);
  // to set the format of labels on x-axis e.g. font, color, step
  $g->set_x_label_style( 10, '#18A6FF', 1 );
 
  // To tick the values on x-axis
  // 2 means tick every 2nd value
  $g->set_x_axis_steps( 1 );
 
  //set maximum value for y-axis
  //we can fix the value as 20, 10 etc.
  //but its better to use max of data
  $g->set_y_max( max($chartData) );
  $g->y_label_steps( 10 );
  $g->set_y_legend( 'Porcentaje', 12, '#18A6FF' );
  echo $g->render();
 
  return sfView::NONE;
}

public function executeGraficoCircular()
{
  $chatData = array();
  for( $i = 0; $i < 25; $i++ )
  {
    $data[] = rand(5,20);
  }
 
  //Creating a stGraph object       
  $g = new stGraph();
 
  //set background color
  $g->bg_colour = '#E4F5FC';
 
  //Set the transparency, line colour to separate each slice etc.
  $g->pie(80,'#78B9EC','{font-size: 12px; color: #78B9EC;');
 
  //array two arrray one containing data while other contaning labels 
  // $g->pie_values($data, array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'));

  $estados = Doctrine_Core::getTable('Estado')->getEstados();
  foreach ($estados as $e){
      $lista_estados[] = $e->getNombreEstado(); 
  }
  $g->pie_values($data,$lista_estados);
  //Set the colour for each slice. Here we are defining three colours 
  //while we need 7 colours. So, the same colours will be 
  //repeated for the all remaining slices in the same order  
  $g->pie_slice_colours( array('#d01f3c','#356aa0','#c79810') );
 
  //To display value as tool tip
  $g->set_tool_tip( '#val#%' );
 
  $g->title( '% de Facilitadores por Estado', '{font-size:18px; color: #18A6FF}' );
  echo $g->render();
 
  return sfView::NONE;
}

public function executeGraficoLinea()
{
  $chartData = array();
  for( $i = 0; $i < 25; $i++ )
  {
    $chartData[] = rand(0, 50);
  }
 
  //Create new stGraph object
  $g = new stGraph();
 
  // Chart Title
  $g->title( '% de Facilitadores por Estado', '{font-size: 20px;}' );
  $g->bg_colour = '#E4F5FC';
  $g->set_inner_background( '#E3F0FD', '#CBD7E6', 90 );
  $g->x_axis_colour( '#8499A4', '#E4F5FC' );
  $g->y_axis_colour( '#8499A4', '#E4F5FC' );
 
  //Use line_dot to set line dots diameter, text, color etc.
  $g->line_dot(2, 3, '#3495FE', 'Porcentaje de facilitadores por Estado', 10);
 
  //In case of line chart data should be passed to stGraph object
  //unsing set_data
  $g->set_data( $chartData );
 
  //Setting labels for X-Axis
  $estados = Doctrine_Core::getTable('Estado')->getEstados();
  foreach ($estados as $e){
      $lista_estados[] = $e->getNombreEstado();
  }
  $g->set_x_labels($lista_estados);
  //to set the format of labels on x-axis e.g. font, color, step
  $g->set_x_label_style( 10, '#18A6FF', 1, 1 );

  //set maximum value for y-axis
  //we can fix the value as 20, 10 etc.
  //but its better to use max of data
  $g->set_y_max( max($chartData) );
 
  $g->y_label_steps( 10 );
 
  // display the data
  echo $g->render();
 
  echo $g->render();
 
  return sfView::NONE;
}



}
