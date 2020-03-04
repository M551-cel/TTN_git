<?php
namespace Drupal\nodes\Controller;
use Drupal\Core\Controller\ControllerBase;
class NodesController extends ControllerBase {
public function nodelist() {
$query = \Drupal::entityQuery('node')->condition('status', 1); //content type
$nids = $query->execute();
$url = '<table>';$url .= "<tr><td><b>" . "Node ID" . '</td><td><b>' . "Node Name". '</td></tr>';
foreach ($nids as $nid) {
$node = \Drupal\node\Entity\Node::load($nid);
$body = $node->body->value;
$title = $node->title->value;
$type =$node->type->value;
$url .= "<tr><td>" . $title . '</td><td>' . $body . '</td></tr>';
}
$url .= "</table>";
return [
'#type' => 'markup',
'#markup' => $url,
];
}
}
