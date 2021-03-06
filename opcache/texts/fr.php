<?php

$texts = [
    'project.link'                                          => 'Projet sur GitHub',
    'project.log_in'                                        => 'Laissez moi entrer !',

    'error.not.installed.title'                             => 'Non installé',
    'error.not.installed.description'                       => 'Il semble qu\'OpCache ne soit pas installé.',
    'error.not.enabled.title'                               => 'Non activé',
    'error.not.enabled.description'                         => 'Il semble qu\'OpCache ne soit pas activé.',

    'menu.status'                                           => 'Statut',
    'menu.config'                                           => 'Configuration',
    'menu.scripts'                                          => 'Scripts mis en cache',
    'menu.graphs'                                           => 'Graphiques',

    'reset.submit'                                          => 'Réinitialiser',
    'confirmation.reset'                                    => 'Êtes-vous sûr de vouloir réinitialiser le cache ?',
    'confirmation.yes'                                      => 'Oui',
    'confirmation.no'                                       => 'Non',

    'status.title'                                          => 'Statut',
    'status.opcache_enabled'                                => 'Activé',
    'status.cache_full'                                     => 'Cache plein',
    'status.restart_pending'                                => 'Redémarrage en attente',
    'status.restart_in_progress'                            => 'Redémarrage en cours',

    'memory.title'                                          => 'Utilisation mémoire',
    'memory.used_memory'                                    => 'Mémoire utilisée',
    'memory.free_memory'                                    => 'Mémoire disponible',
    'memory.wasted_memory'                                  => 'Mémoire gâchée',
    'memory.current_wasted_percentage'                      => 'Actuellement gâchée',

    'stats.title'                                           => 'Statistiques',
    'stats.num_cached_scripts'                              => 'Scripts mis en cache',
    'stats.num_cached_keys'                                 => 'Clés mises en cache',
    'stats.max_cached_keys'                                 => 'Maximum de clés mises en cache',
    'stats.hits'                                            => 'Accès',
    'stats.start_time'                                      => 'Heure de démarrage',
    'stats.last_restart_time'                               => 'Dernier redémarrage',
    'stats.oom_restarts'                                    => 'Redémarrages pour cause de dépassement de mémoire',
    'stats.hash_restarts'                                   => 'Redémarrages hash',
    'stats.manual_restarts'                                 => 'Redémarrages manuels',
    'stats.misses'                                          => 'Ratés',
    'stats.blacklist_misses'                                => 'Ratés mis sur liste noire',
    'stats.blacklist_miss_ratio'                            => 'Ratio d\'échec',
    'stats.opcache_hit_rate'                                => 'Taux de succès d\'OpCache',

    'config.title'                                          => 'Configuration',
    'config.opcache.enable'                                 => 'Activé',
    'config.opcache.enable.description'                     => 'Détermine si Zend OpCache est activé.',
    'config.opcache.enable_cli'                             => 'Activé pour le CLI',
    'config.opcache.enable_cli.description'                 => 'Détermine si Zend OpCache est activé pour la version CLI de PHP.',
    'config.opcache.use_cwd'                                => 'Clés basés sur le répertoire de travail courant',
    'config.opcache.use_cwd.description'                    => 'Lorsque cette directive est activée, OpCache ajoute le répertoire de travail courant à la clé de script, éliminant ainsi les collisions possibles entre les fichiers portant le même nom (basename). Désactiver la directive améliore les performances, mais peut briser les applications existantes.',
    'config.opcache.validate_timestamps'                    => 'Valider les timestamps',
    'config.opcache.validate_timestamps.description'        => 'Lorsque désactivé, vous devez réinitialiser OpCache manuellement ou redémarrer le serveur Web pour que les modifications du système de fichiers prennent effet.',
    'config.opcache.inherited_hack'                         => 'Hack hérité',
    'config.opcache.inherited_hack.description'             => '',
    'config.opcache.dups_fix'                               => 'Dups fix',
    'config.opcache.dups_fix.description'                   => '',
    'config.opcache.revalidate_path'                        => 'Re-valider le chemin',
    'config.opcache.revalidate_path.description'            => 'Active ou désactive l\'optimisation de la recherche de fichiers dans l\'« include_path ».',
    'config.opcache.log_verbosity_level'                    => 'Niveau de verbosité du journal',
    'config.opcache.log_verbosity_level.description'        => 'Toutes les erreurs d\'OpCache vont dans le journal du serveur Web. Par défaut, seules les erreurs fatales (niveau 0), ou erreurs (niveau 1) y sont inscrites. Vous pouvez aussi activer les avertissements (niveau 2), messages informatifs (niveau 3) ou de débogage (niveau 4).',
    'config.opcache.memory_consumption'                     => 'Capacité mémoire d\'OpCache',
    'config.opcache.memory_consumption.description'         => 'Taille de la mémoire de stockage partagée d\'OpCache.',
    'config.opcache.interned_strings_buffer'                => 'Mémoire tampon pour les chaînes internées',
    'config.opcache.interned_strings_buffer.description'    => 'Quantité de mémoire pour les chaînes internées en Mo.',
    'config.opcache.max_accelerated_files'                  => 'Nombre maximum de scripts pouvant être mis en cache',
    'config.opcache.max_accelerated_files.description'      => 'Le nombre maximum de clés (scripts) dans la table d\'hash d\'OpCache. Seuls des nombres entre 200 et 100000 sont autorisés.',
    'config.opcache.max_wasted_percentage'                  => 'Maximum de pertes avant redémarrage',
    'config.opcache.max_wasted_percentage.description'      => 'Pourcentage maximal de mémoire « gâchée » jusqu\'à ce qu\'un redémarrage soit prévu.',
    'config.opcache.consistency_checks'                     => 'Fréquence des tests de cohérence',
    'config.opcache.consistency_checks.description'         => 'Vérifie la somme de contrôle du cache toutes les N requête(s). La valeur par défaut de « 0 » signifie que les contrôles sont désactivés.',
    'config.opcache.force_restart_timeout'                  => 'Délai avant redémarrage forcé',
    'config.opcache.force_restart_timeout.description'      => 'Combien de temps attendre (en secondes) avant de commencer un redémarrage programmé si le cache n\'est pas en cours d\'accès.',
    'config.opcache.revalidate_freq'                        => 'Fréquence de vérification des changements',
    'config.opcache.revalidate_freq.description'            => 'A quelle fréquence (en secondes) vérifier les timestamps de fichiers pour modifier l\'allocation de stockage de mémoire partagée. « 1 » signifie valider une fois par seconde, mais seulement une fois par demande. « 0 » signifie toujours valider.',
    'config.opcache.preferred_memory_model'                 => '',
    'config.opcache.preferred_memory_model.description'     => 'Système applicatif de mémoire partagée préféré. Laisser vide laisse le système choisir.',
    'config.opcache.blacklist_filename'                     => 'Liste noire',
    'config.opcache.blacklist_filename.description'         => 'L\'emplacement du fichier de liste noire d\'OpCache (wildcards autorisés). Chaque fichier liste noire d\'OpCache est un fichier texte contenant les noms des fichiers qui ne devraient pas être accélérés. Le format du fichier est d\'ajouter chaque nom de fichier après une nouvelle ligne. Le nom du fichier peut être un chemin complet, ou juste un préfixe de fichier (i.e., /var/www/x mets en liste noire tous les fichiers et répertoires dans /var/www qui commencent par \'x\'). Les lignes commençant par un ; sont ignorées (commentaires).',
    'config.opcache.max_file_size'                          => 'Exclure la mise en cache au-dessus d\'une certaine taille',
    'config.opcache.max_file_size.description'              => 'Permet d\'exclure de la mise en cache les fichiers trop volumineux. Par défaut tous les fichiers sont mis en cache.',
    'config.opcache.error_log'                              => 'Journal d\'erreurs',
    'config.opcache.error_log.description'                  => 'Nom du fichier error_log d\'OpCache. Une chaîne vide suppose « stderr ».',
    'config.opcache.protect_memory'                         => 'Protéger la mémoire',
    'config.opcache.protect_memory.description'             => 'Protéger la mémoire partagée d\'écritures inattendues lors de l\'exécution de scripts. Uniquement utile à des fins de débogage interne.',
    'config.opcache.save_comments'                          => 'Sauvegarder les commentaires',
    'config.opcache.save_comments.description'              => 'Si activé, tous les commentaires PHPDoc sont supprimés pour réduire la taille du code optimisé.',
    'config.opcache.load_comments'                          => 'Activer les commentaires',
    'config.opcache.load_comments.description'              => 'Si désactivé, les commentaires PHPDoc ne sont pas chargés à partir des SHM, donc les « commentaires documentatifs » devraient toujours être stockés (save_comments=1), mais pas chargés par les applications qui n\'en ont pas besoin de toute façon.',
    'config.opcache.fast_shutdown'                          => 'Extinction rapide',
    'config.opcache.fast_shutdown.description'              => 'Si activé, une séquence d\'arrêt rapide est utilisée pour le code accéléré.',
    'config.opcache.enable_file_override'                   => 'Coutournement de fichiers',
    'config.opcache.enable_file_override.description'       => 'Permet la substitution des fonctions d\'existence de fichiers (file_exists, etc.).',
    'config.opcache.optimization_level'                     => 'Niveau d\'optimisation',
    'config.opcache.optimization_level.description'         => 'Un masque de bits, où chaque bit active ou désactive le passage OpCache approprié.',

    'blacklist.title'                                       => 'Liste noire',
    'blacklist.empty'                                       => 'Aucun script n\'a été mis sur liste noire.',

    'scripts.title'                                         => 'Scripts mis en cache',
    'scripts.overview.title'                                => 'Vue d\'ensemble',
    'scripts.empty'                                         => 'Aucun script n\'a été mis en cache',
    'scripts.directory.script_count'                        => ' (<i class="count">%s</i> fichiers)',
    'scripts.full_path'                                     => 'Nom du fichier',
    'scripts.hits'                                          => 'Accès',
    'scripts.memory_consumption'                            => 'Mémoire',
    'scripts.last_used_timestamp'                           => 'Dernière utilisation',
    'scripts.timestamp'                                     => 'Créé',
    'scripts.actions'                                       => 'Actions',
    'script.invalidate'                                     => 'Invalider',
    'scripts.filter.placeholder'                            => 'Filtrer les scripts mis en cache',

    'graph.title'                                           => 'Graphiques',
    'graph.memory.title'                                    => 'Mémoire',
    'graph.memory.free'                                     => 'libre',
    'graph.memory.used'                                     => 'utilisée',
    'graph.memory.wasted'                                   => 'gâchée',
    'graph.keys.title'                                      => 'Clés',
    'graph.keys.free'                                       => 'libres',
    'graph.keys.scripts'                                    => 'utilisées',
    'graph.keys.wasted'                                     => 'gâchées',
    'graph.hits.title'                                      => 'Accès',
    'graph.hits.hits'                                       => 'accès',
    'graph.hits.misses'                                     => 'ratés',
    'graph.hits.blacklist'                                  => 'liste noire'
];
