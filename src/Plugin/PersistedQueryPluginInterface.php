<?php


namespace Drupal\graphql\Plugin;

use Drupal\Component\Plugin\ConfigurableInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\search_api\Processor\ProcessorInterface;
use GraphQL\Server\OperationParams;

interface PersistedQueryPluginInterface extends ConfigurableInterface, PluginInspectionInterface {

  /**
   * @return string
   *   The actual GraphQL query.
   */
  public function getQuery($id, OperationParams $operation);

  /**
   * Returns the label for use on the administration pages.
   *
   * @return string
   *   The administration label.
   */
  public function label();

  /**
   * Returns the plugin's description.
   *
   * @return string
   *   The plugin description.
   */
  public function getDescription();

  /**
   * Returns the weight of this plugin instance.
   *
   * @return int
   *   The default weight for the given stage.
   */
  public function getWeight();

  /**
   * Sets the weight for this plugin instance.
   *
   * @param int $weight
   *   The weight.
   */
  public function setWeight($weight);
}
