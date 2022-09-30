<?php

namespace Drupal\movies\Entity;

use Drupal\Core\Entity\RevisionableContentEntityBase;
use Drupal\movies\MoviesInterface;

/**
 * Defines the movies entity class.
 *
 * @ContentEntityType(
 *   id = "movies",
 *   label = @Translation("Movies"),
 *   label_collection = @Translation("Moviess"),
 *   label_singular = @Translation("movies"),
 *   label_plural = @Translation("moviess"),
 *   label_count = @PluralTranslation(
 *     singular = "@count moviess",
 *     plural = "@count moviess",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\movies\MoviesListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "access" = "Drupal\movies\MoviesAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\movies\Form\MoviesForm",
 *       "edit" = "Drupal\movies\Form\MoviesForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "movies",
 *   constraints = {
 *     "ReleaseTimeChecking" = {}
 *   },
 *   data_table = "movies_field_data",
 *   revision_table = "movies_revision",
 *   revision_data_table = "movies_field_revision",
 *   show_revision_ui = TRUE,
 *   translatable = TRUE,
 *   admin_permission = "administer movies",
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "revision_id",
 *     "published" = "status",
 *     "langcode" = "langcode",
 *     "label" = "id",
 *     "uuid" = "uuid",
 *     "revision_created" = "revision_created"
 *   },
 *   revision_metadata_keys = {
 *     "revision_log_message" = "revision_log",
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log_message",
 *   },
 *   links = {
 *     "collection" = "/admin/content/movies",
 *     "add-form" = "/movies/add",
 *     "canonical" = "/movies/{movies}",
 *     "edit-form" = "/movies/{movies}/edit",
 *     "delete-form" = "/movies/{movies}/delete",
 *   },
 *   field_ui_base_route = "entity.movies.settings",
 * )
 */
class Movies extends RevisionableContentEntityBase implements MoviesInterface {

}
