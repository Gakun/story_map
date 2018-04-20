<?php  
return  (object)array(
   21000 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21000',
       'title' => 'First Fishing Trip I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'Everyone has had a go fishing but I have not had a real go yet. I have invited some friends over so I need some practice, can you teach me?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'properties' => 'fishing_taps:1000',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_yellow_croaker.png',
             'text' => 'Catch any 2 items from the sea',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish 4 times using the Squid Hook',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '700012',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_yellow_croaker.png',
             'text' => 'Sell __total Yellow Croakers from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip I',
         'description' => 'Good job! It\'s true that practice makes perfect.',
      ),
    ),
  ),
   21001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21001',
       'title' => 'First Fishing Trip I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'Everyone has had a go fishing but I have not had a real go yet. I have invited some friends over so I need some practice, can you teach me?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'properties' => 'fishing_taps:1000',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_yellow_croaker.png',
             'text' => 'Catch any 2 items from the sea',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish 4 times using the Squid Hook',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip I',
         'description' => 'Good job! It\'s true that practice makes perfect.',
      ),
    ),
  ),
   21002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21002',
       'title' => 'First Fishing Trip II',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'No problem!',
       'description' => 'My friends are arriving for some fishing later so I need to get some of my jobs done before the fun starts, can you help me?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '20028',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_pasture.png',
             'text' => 'Plant 50 Pasture',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '20029',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_pasture.png',
             'text' => 'Harvest 50 Pasture',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '20115',
             'spend_rp' => '13',
             'icon_url' => 'images/task/st_beef.png',
             'text' => 'Produce 25 Beef',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip II',
         'description' => 'That\'s some of the jobs done. I always have to do hard work before I can have some fun, but it\'s worth it.',
      ),
    ),
  ),
   21003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21003',
       'title' => 'First Fishing Trip III',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Of course!',
       'description' => 'My friends have arrived to try some fishing. Do you want to come along as well?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'properties' => 'fishing_fish:700041',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_gulfweed.png',
             'text' => 'Catch 1 Gulfweed',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'properties' => 'fishing_fish:700032',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_mud_crab.png',
             'text' => 'Catch 1 Mud Crab',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '7',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '7',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish 7 times using the Squid Hook',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip III',
         'description' => 'Wow, I think I am pretty good! I am better than some of my friends but they have only just started. One of them caught an old boot!',
      ),
    ),
  ),
   21004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21004',
       'title' => 'First Fishing Trip IV',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Unlucky...',
       'description' => 'My friends are going to spend the whole day fishing, so lucky! I need to do some more jobs because I didn\'t finish them all earlier.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '9',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_corn.png',
             'text' => 'Plant 50 Corn',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '13',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_corn.png',
             'text' => 'Harvest 50 Corn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '300005',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_butterfly_house.png',
             'text' => 'Buy 1 Butterfly House',
             'shopping' => '1',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip IV',
         'description' => 'Excellent! This corn will sell well in the shop and make Grandma happy.',
      ),
    ),
  ),
   21005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21005',
       'title' => 'First Fishing Trip V',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Good idea!',
       'description' => 'My girlfriend is also fishing at the moment. I hope she is not too annoyed because I have jobs to do. I can give her a rose :)',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '5005',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_red_rose.png',
             'text' => 'Plant 60 Red Roses',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '5006',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_red_rose.png',
             'text' => 'Harvest 60 Red Roses',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '3',
             'filter' => '55005',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_lychee_tree.png',
             'text' => 'Have 3 Lychee Trees on your farm',
             'shopping' => '1',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip V',
         'description' => 'My girlfriend loved the rose. I am back in her good books now.',
      ),
    ),
  ),
   21006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21006',
       'title' => 'First Fishing Trip VI',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'OK',
       'description' => 'My friends are having a competition now. They all want to try and catch the old boot. Let\'s see if we can catch it first.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'properties' => 'fishing_fish:700045',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_old_boot.png',
             'text' => 'Catch 1 Old Boot',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'properties' => 'fishing_fish:700036',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_coral.png',
             'text' => 'Catch 1 Coral',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'properties' => 'fishing_fish:700013',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_hairtail.png',
             'text' => 'Catch 1 Hairtail',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip VI',
         'description' => 'I won! I got the boot! However, I would have preferred a tasty fish. Maybe I can trick Felicia into eating the boot haha',
      ),
    ),
  ),
   21007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21007',
       'title' => 'First Fishing Trip VII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Sweet!',
       'description' => 'Grandma just shouted. Back to some more jobs. I need to check on the nectar.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '300009',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_netcar.png',
             'text' => 'Collect __total jars of Nectar from the Butterfly House',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '63',
             'spend_rp' => '24',
             'icon_url' => 'images/task/st_apple_jam.png',
             'text' => 'Produce __total jars of Apple Jam',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600075',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_apple_kulfi.png',
             'text' => 'Prepare __total Apple Kulfi',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21008',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip VII',
         'description' => 'All the jars are ready to be sold. Grandma is happy and I can go back to fishing again :)',
      ),
    ),
  ),
   21008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21008',
       'title' => 'First Fishing Trip VIII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Bring it on!',
       'description' => 'My friends want to challenge me again. Do you want to see if you have more skills?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'properties' => 'fishing_taps:99999',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Catch 5 fish at the Fishing Pier',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'properties' => 'fishing_taps:5',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_wooden_fishing_rod.png',
             'text' => 'Catch 1 item in less than 5 taps',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'properties' => 'fishing_star:1',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_wooden_fishing_rod.png',
             'text' => 'Catch 2 fish which are at least 1 star in weight',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip VIII',
         'description' => 'I\'m still the champions haha. What are we going to do with all this tasty fish? We will have to cook it soon.',
      ),
    ),
  ),
   21009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21009',
       'title' => 'First Fishing Trip IX',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s go!',
       'description' => 'Urgh, Grandma is annoying me, still some more jobs to do. However, she says these are the last ones and then I can finally play with my friends for the rest of the day. Let\'s try and get them done asap!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '30145',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_lotus_flower.png',
             'text' => 'Plant 60 Lotus Flowers',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '30146',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_lotus_flower.png',
             'text' => 'Harvest 60 Lotus Flowers',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '30134',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_goose_feather.png',
             'text' => 'Collect 60 Goose Feathers',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip IX',
         'description' => 'I just need to get this all to the shop and then it\'s time for another fishing competition.',
      ),
    ),
  ),
   21010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21010',
       'title' => 'First Fishing Trip X',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Game on!',
       'description' => 'We have decided to have a biggest catch competition. I hope I can win and beat my friends.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'properties' => 'fishing_star:2',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_carboon_rod.png',
             'text' => 'Catch 2 items which are two stars in weight',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'properties' => 'fishing_taps:7',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_carboon_rod.png',
             'text' => 'Catch 1 item in less than 7 taps',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'properties' => 'fishing_hook:700006',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_bone_hook.png',
             'text' => 'Fish 3 times with the Bone Fishhook',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21011',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '585',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'First Fishing Trip X',
         'description' => 'Wow, you\'re a fishing professional! Now I can cook a lovely dinner for my girlfriend. I might need Felicia\'s help though...',
      ),
    ),
  ),
   21011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21011',
       'title' => 'Holy Smokes I',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Cook it!',
       'description' => 'Holy Smokes! What can we do with all this fish? Darryl and his friends have caught loads.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '30301',
             'icon_url' => 'images/task/st_salt_pond.png',
             'text' => 'Have a Salt Pond on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '30300',
             'icon_url' => 'images/task/st_smoke_house.png',
             'text' => 'Have a Smoke House on your farm',
             'shopping' => '1',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21012',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '585',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Holy Smokes I',
         'description' => 'Excellent! Now we can start to cook all this fish.',
      ),
    ),
  ),
   21012 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21012',
       'title' => 'Holy Smokes II',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'I\'ll get it!',
       'description' => 'One of the best fishes to smoke is the yellow croaker. It\'s a shame Darryl didn\'t manage to catch more of these.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'properties' => 'fishing_fish:700012',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_yellow_croaker.png',
             'text' => 'Catch 3 Yellow Croakers',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21013',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '585',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Holy Smokes II',
         'description' => 'Wow! Watch out, it\'s really big! Be careful it doesn\'t wriggle away.',
      ),
    ),
  ),
   21013 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21013',
       'title' => 'Holy Smokes III',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Yeah!',
       'description' => 'I think we are one of the first farms to offer smoked fish. I hope our customers will like what we make.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '30300',
             'properties' => 'raw_material:700012',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_yellow_croaker.png',
             'text' => 'Add 3 Yellow Croakers to the Smoke House',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '30300',
             'properties' => 'raw_material:30302',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_salt.png',
             'text' => 'Add 3 Salt to the Smoke House',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '30303',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_smoked_yellow_croaker.png',
             'text' => 'Collect 3 Smoked Yellow Croakers from the Smoke House',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21014',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Holy Smokes III',
         'description' => 'That looks good. I hope they will sell well in the shop!',
      ),
    ),
  ),
   21014 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21014',
       'title' => 'Holy Smokes IV',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Sounds good!',
       'description' => 'How about some smoked Hairtail?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '30300',
             'properties' => 'raw_material:700013',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_hairtail.png',
             'text' => 'Add 1 Hairtail to the Smoke House',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '30304',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_smoked_hairtail.png',
             'text' => 'Collect 1 Smoked Hairtail',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21015',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Holy Smokes IV',
         'description' => 'All this fish is new to me so I had a sneaky taste test. But luckily it tastes good hehe',
      ),
    ),
  ),
   21015 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21015',
       'title' => 'Holy Smokes V',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'I have a friend coming later to test some of the new smoked fish. So let\'s make some more.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '30300',
             'properties' => 'raw_material:700014',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_tilapia.png',
             'text' => 'Add 1 Tilapia to the Smoke House',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '30305',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_smoked_tilapia.png',
             'text' => 'Collect 1 Smoked Tilapia',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '21016',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Holy Smokes V',
         'description' => 'I think we need one more dish for my friend to taste. If she likes it, then I know our customers will like it too.',
      ),
    ),
  ),
   21016 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '21016',
       'title' => 'Holy Smokes VI',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Me too!',
       'description' => 'Flatfish is quite popular, so let\'s try it. I hope my friend likes it.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '30300',
             'properties' => 'raw_material:700015',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_flatfish.png',
             'text' => 'Add 1 Flatfish to the Smoke House',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '30306',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_smoked_flatfish.png',
             'text' => 'Collect 1 Smoked Flatfish',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Holy Smokes VI',
         'description' => 'This all worked really well. I think we have decided on our new products to sell, because my friend said everything was delicious.',
      ),
    ),
  ),
   22001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22001',
       'title' => 'Farm Movie Fest I',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Action!',
       'description' => 'Hey, did you hear about the Movie Festival? I would love to go, but it\'s so far... Wait, I got an idea. Let\'s make our own Farm Movie Fest! We just need to invite some friends and prepare some tasty snacks!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '100025',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_stone_mailbox.png',
             'text' => 'Have a Stone Mailbox on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '2',
             'filter' => '200233',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_cinnamon_tree.png',
             'text' => 'Have 2 Cinnamon Trees on your farm',
             'shopping' => '1',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '200234',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_cinnamon.png',
             'text' => 'Harvest 4 Cinnamon',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest I',
         'description' => 'I really hope a lot of people will join our Farm Movie Fest!',
      ),
    ),
  ),
   22002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22002',
       'title' => 'Farm Movie Fest II',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Maybe some cheese?',
       'description' => 'The first film I want to show is a comedy movie from the Netherlands. Let\'s treat our audience with some Dutch specialties!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '5',
             'filter' => '20153',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lemon_tree.png',
             'text' => 'Have 5 Lemon Trees on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600138',
             'spend_rp' => '16',
             'icon_url' => 'images/task/st_pepemoten.png',
             'text' => 'Prepare 8 baskets of Pepernoten',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600140',
             'spend_rp' => '16',
             'icon_url' => 'images/task/st_speculoos.png',
             'text' => 'Prepare 8 baskets of Speculoos',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest II',
         'description' => 'Hahaha, I laughed so much during this movie! I never knew Dutch comedies were so funny!',
      ),
    ),
  ),
   22003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22003',
       'title' => 'Farm Movie Fest III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'I\'m on it!',
       'description' => 'I thought everyone would leave after the movie, but it seems like they want to stay a bit longer and talk about the movie. Quick, bring some drinks and snacks!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '200339',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_banana_cake.png',
             'text' => 'Produce 5 Banana Cakes',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '30099',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lemon_cake.png',
             'text' => 'Produce 5 Lemon Cakes',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600007',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lemon_champagne.png',
             'text' => 'Prepare __total pitchers of Lemon Champagne',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest III',
         'description' => 'Phew, that was close! Luckily my neighbors were so busy talking about the movie that they didn\'t notice I ran out of drinks and snacks!',
      ),
    ),
  ),
   22004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22004',
       'title' => 'Farm Movie Fest IV',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'No problem!',
       'description' => 'I need to prepare better for tomorrow! I\'ll take care of the snacks and you make the drinks, okay?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '200',
             'filter' => '42',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_grape.png',
             'text' => 'Harvest 200 Grapes',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600043',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lemon_cocktail.png',
             'text' => 'Prepare 5 Lemon Cocktails',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600044',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lemon_banana_daiquiri.png',
             'text' => 'Prepare 5 glasses of Lemon-banana Daiquiri',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest IV',
         'description' => 'Thank you! This should be enough drinks for tomorrow night!',
      ),
    ),
  ),
   22005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22005',
       'title' => 'Farm Movie Fest V',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Yummy!',
       'description' => 'Today is a children\'s movie day! I am confident that all the children will love my blackberry jam! Let\'s hurry up and prepare all the jam before they arrive!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '200',
             'filter' => '85',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_blackberry.png',
             'text' => 'Plant 200 Blackberries',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '200',
             'filter' => '86',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_blackberry.png',
             'text' => 'Harvest 200 Blackberries',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '75',
             'filter' => '90',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_Blackberry_jam.png',
             'text' => 'Produce 75 jars of Blackberry Jam',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest V',
         'description' => 'Oh, the children were adorable. They loved the movie and laughed a lot!',
      ),
    ),
  ),
   22006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22006',
       'title' => 'Farm Movie Fest VI',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Aye aye!',
       'description' => 'The parents haven\'t arrived yet to pick up their children. So they still have some time left to play pirates and mermaids. Let\'s cook some delicious seafood snacks for them!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '200488',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cherry_juice.png',
             'text' => 'Produce 10 glasses of Cherry Juice',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'properties' => 'fishing_hook:700007',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_treble_hook.png',
             'text' => 'Fish 30 times with Treble Hook',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '600134',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_octopus_ball.png',
             'text' => 'Prepare 3 Octopus Balls',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest VI',
         'description' => 'Arrr! The children had a great afternoon. Everyone left with a smile on their face!',
      ),
    ),
  ),
   22007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22007',
       'title' => 'Farm Movie Fest VII',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Yikes!',
       'description' => 'Look at the sundial. It\'s time to get ready for the next movie! This one will be a bit scarier. It\'s a horror movie about vampires... Are you scared?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '109',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_sundial.png',
             'text' => 'Have a Sundial on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '200',
             'filter' => '200457',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_charnonnay.png',
             'text' => 'Plant 200 Chardonnay',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '200',
             'filter' => '200458',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_charnonnay.png',
             'text' => 'Harvest 200 Chardonnay',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22008',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '585',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest VII',
         'description' => 'Oh, I am already shaking. I\'m not sure if I can watch a scary movie...',
      ),
    ),
  ),
   22008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22008',
       'title' => 'Farm Movie Fest VIII',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'The movie was scary, but also amazing at the same time. Alright, let\'s get some drinks and ask everyone how they liked it!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '200459',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_champagne.png',
             'text' => 'Produce 50 bottles of Champagne',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '200466',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_grape_juice.png',
             'text' => 'Produce 50 glasses of Grape Juice',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '200468',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_orange_juice.png',
             'text' => 'Produce 10 glasses of Orange Juice',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest VIII',
         'description' => 'Grape juice and champagne are for the vampire lovers, orange juice is for the one who has to drive home!',
      ),
    ),
  ),
   22009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22009',
       'title' => 'Farm Movie Fest IX',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'To the kitchen!',
       'description' => 'Now let\'s prepare some oriental dishes for the last movie: The flying carpet! I have no idea what the movie is about, but I know a few things about eastern cuisine!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '600179',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_arabic_kabsa.png',
             'text' => 'Prepare 25 plates of Arabic Kabsa',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '600180',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_roast_turkey.png',
             'text' => 'Prepare 25 Roast Turkeys',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '600181',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_stuffed_turkey.png',
             'text' => 'Prepare 25 Stuffed Turkeys',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest IX',
         'description' => 'Ta-da! Nobody will be able to resist these dishes. But hopefully they will pay some attention to the movie as well, haha.',
      ),
    ),
  ),
   22010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22010',
       'title' => 'Farm Movie Fest X',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Great idea!',
       'description' => 'After showing all the movies, it\'s up to the judges to decide which one they liked the most. We should get them some special snacks so they are in a good mood!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish 30 times with the Squid Hook',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600177',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_baked_tilapia.png',
             'text' => 'Prepare 6 Baked Tilapia',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600178',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_tilapia_with_chutney_sauce.png',
             'text' => 'Prepare 6 Tilapia with Chutney Sauce',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '22011',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest X',
         'description' => 'Our part is done. We did everything we could. Let\'s wait for the verdict!',
      ),
    ),
  ),
   22011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '22011',
       'title' => 'Farm Movie Fest XI',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Super!',
       'description' => 'The jury couldn\'t decide. The movies were so different, but all really great. I would say it was a successful week. Let\'s celebrate it!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600170',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_spiced_fish.png',
             'text' => 'Prepare 6 bowls of Spicy Fish',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600171',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_pickled_cabbage.png',
             'text' => 'Prepare 6 bowls of Pickled Cabbage',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600172',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_boiled_fish_with_pickled_cabbage.png',
             'text' => 'Prepare 6 bowls of Boiled Fish with Pickled Cabbage',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Movie Fest XI',
         'description' => 'Thank you for all the help! I hope you\'ve had as much fun as I did!',
      ),
    ),
  ),
   23001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23001',
       'title' => 'Beach Party I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Cool!',
       'description' => 'My friend and I are having a party at the beach today. I can\'t wait to see the sea and the beach! Grandma even allowed me to try surfing today!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '20101',
             'icon_url' => 'images/task/st_surfboard.png',
             'text' => 'Have a Surf Board on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '31000',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_seafood_house.png',
             'text' => 'Have a Seafood House on your farm',
             'shopping' => '1',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish 6 times with the Squid Hook',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '585',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party I',
         'description' => 'Can you smell the wonderful sea breeze? I can\'t wait for our beach party!',
      ),
    ),
  ),
   23002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23002',
       'title' => 'Beach Party II',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Woooo!',
       'description' => 'Wow, I tried my first surfing lesson, it was super fun! But now I am hungry! I should try the seafood, it is the best near the seaside!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'seaFoodProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '700028',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_crayfish.png',
             'text' => 'Process 6 Crayfish in the Seafood House',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600105',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_steamed_egg_with_shrimp.png',
             'text' => 'Prepare 6 bowls of Steamed Egg with Shrimp',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600106',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_custard_crab.png',
             'text' => 'Prepare 6 plates of Custard Crab',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party II',
         'description' => 'Yummy! The shrimp dishes were delicious! So fresh!',
      ),
    ),
  ),
   23003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23003',
       'title' => 'Beach Party III',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Sweet!',
       'description' => 'The shrimp dishes tasted really good, but now I feel like eating something sweet. I\'ve heard coconut is really popular at the moment!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '3',
             'filter' => '9101',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_coconut_tree.png',
             'text' => 'Have 3 Coconut Trees on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '9102',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_coconut.png',
             'text' => 'Harvest 10 Coconuts',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '30100',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_coconut_cake.png',
             'text' => 'Produce 10 Coconut Cakes',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party III',
         'description' => 'Good weather, good drinks and cake! What more can you wish for!',
      ),
    ),
  ),
   23004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23004',
       'title' => 'Beach Party IV',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'I\'m so ready!',
       'description' => 'Felicia taught me some special dishes and I want to present them at the party! Are you ready to cook?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600167',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_coconut_milk.png',
             'text' => 'Prepare 10 Coconut Milk',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600166',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_spicy_stir_fried_chicken.png',
             'text' => 'Prepare 10 plates of Spicy Stir-Fried Chicken',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600168',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_thai_green_curry.png',
             'text' => 'Prepare 10 Thai Green Curry',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party IV',
         'description' => 'Thai food was a nice choice! I\'m sure everyone will like these dishes!',
      ),
    ),
  ),
   23005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23005',
       'title' => 'Beach Party V',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'I love treats!',
       'description' => 'The beach party offers a lot of exotic dishes! Have you tried the sweet desserts? It\'s not a party without some treats!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '101001',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_candy_machine.png',
             'text' => 'Have a Candy Machine on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '65012',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_lychee_candy.png',
             'text' => 'Produce 10 Lychee Candies',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish 20 times with the Squid Hook',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party V',
         'description' => 'You know what? I think lychee candy will be my favorite candy from now on!',
      ),
    ),
  ),
   23006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23006',
       'title' => 'Beach Party VI',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Great idea!',
       'description' => 'After the delicious seafood we ate, my friends and I want to go out on the sea and try to catch some fish ourselves!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'properties' => 'fishing_hook:700006',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_bone_hook.png',
             'text' => 'Fish 6 times with the Bone Fishhook',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600102',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_fried_crab_stick.png',
             'text' => 'Prepare 6 plates of Fried Crab Stick',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600103',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_creamed_crab_cake.png',
             'text' => 'Prepare 6 plates of Creamed Crab Cakes',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party VI',
         'description' => 'I picked up quite a tan out there! Looking good!',
      ),
    ),
  ),
   23007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23007',
       'title' => 'Beach Party VII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Suit up!',
       'description' => 'The beach party has a theme and we will walk on the red carpet! I\'m so excited!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '200115',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_carpet_up.png',
             'text' => 'Have a Carpet Top on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '200116',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_carpet_middle.png',
             'text' => 'Have a Carpet Middle on your farm',
             'shopping' => '1',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '200117',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_carpet_down.png',
             'text' => 'Have a Carpet Bottom on your farm',
             'shopping' => '1',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23008',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party VII',
         'description' => 'Do you think I look like a movie star? It\'s really an amazing feeling!',
      ),
    ),
  ),
   23008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23008',
       'title' => 'Beach Party VIII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Go! Go! Go!',
       'description' => 'I didn\'t expect so many people to show up for the party! We need more food! Maybe some chilli dishes will do the trick!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '200',
             'filter' => '151',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_red_bell_pepper.png',
             'text' => 'Plant 200 Red Bell Peppers',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600116',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_shrimp_chilli.png',
             'text' => 'Prepare 6 bowls of Shrimp Chilli',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600117',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_seafood_chilli.png',
             'text' => 'Prepare 4 bowls of Seafood Chilli',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party VIII',
         'description' => 'We made our own delicious shrimp dishes, but I still feel a little bit hungry...',
      ),
    ),
  ),
   23009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23009',
       'title' => 'Beach Party IX',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s cook!',
       'description' => 'Grandma called to check up on me! When I told her that we still need more dishes, she told me some of her secret recipes!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '600160',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_rice_noodle.png',
             'text' => 'Prepare 50 bowls of Rice Noodles',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600161',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_egg_crayfish.png',
             'text' => 'Prepare 6 bowls of Egg Crayfish',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600162',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_pad_thai.png',
             'text' => 'Prepare 6 bowls of Pad Thai',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party IX',
         'description' => 'I\'m really full with Pad Thai now. I should also cook something for Grandma and Felicia, as a thank you!',
      ),
    ),
  ),
   23010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23010',
       'title' => 'Beach Party X',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s have a walk.',
       'description' => 'Grandma said a good present to bring from the beach is a special beach fertilizer. The neighbors will be very thankful. We can walk around and try to find some from the small beach vendors.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'friend_fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => 'friend_fertilize',
             'ignore_filter' => '1',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_fertilize_neighbor.png',
             'text' => 'Fertilize 10 times on your neighbors\' farms',
             'show_me' => '8',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '65006',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Produce 70 loaves of Corn Bread',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '46',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_honey.png',
             'text' => 'Collect 70 jars of Honey',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23011',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party X',
         'description' => 'Wow the beach vendors not only had fertilizer, but also some delicious snacks and sweets!',
      ),
    ),
  ),
   23011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23011',
       'title' => 'Beach Party XI',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'So smart!',
       'description' => 'Is that a fish market over there? I\'ll try one more time to catch some extra fish before it\'s dark. But if the fish don\'t bite, I\'ll just buy some fish and tell everyone I caught it, haha!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'properties' => 'fishing_hook:700007',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_treble_hook.png',
             'text' => 'Fish 30 times with the Treble Hook',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600135',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_seafood_platter.png',
             'text' => 'Prepare 6 Seafood Platters',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600136',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_wasabi_fried_mackerel.png',
             'text' => 'Prepare 2 plates of Wasabi Fried Mackerel',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '23012',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party XI',
         'description' => 'Everyone loves a seafood platter! I\'m sure Grandma and Felicia will love it too!',
      ),
    ),
  ),
   23012 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '23012',
       'title' => 'Beach Party XII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Oishi!',
       'description' => 'Oh, I almost forgot about our neighbors! I want to surprise them with some Asian seafood dishes! They will love my sushi!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600128',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_warship_susi.png',
             'text' => 'Prepare 6 plates of Warship Sushi',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '600129',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_crab_roe_warship_sushi.png',
             'text' => 'Prepare 3 plates of Crab Roe Warship Sushi',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Beach Party XII',
         'description' => 'It\'s time to go home. The party was a big success! I\'ll never forget this beach party!',
      ),
    ),
  ),
   24001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24001',
       'title' => 'Recipe for Success I',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'So nice!',
       'description' => 'I think it is time for you to learn more about the beauty shop! Ol\' MacDonald\'s sister will visit us soon and she can teach you everything about it! She specializes in beauty products.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '32000',
             'icon_url' => 'images/task/st_beauty_shop.png',
             'text' => 'Have a Beauty Shop on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '5008',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_blue_rose.png',
             'text' => 'Harvest __total Blue Roses',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '5006',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_red_rose.png',
             'text' => 'Harvest __total Red Roses',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success I',
         'description' => 'We harvested so many flowers! I wonder which flower she will use for her famous beauty products.',
      ),
    ),
  ),
   24002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24002',
       'title' => 'Recipe for Success II',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'Our farm products are so popular in town that our customers have to pre-order them! Almost everyone loves our beauty and seafood products. Let\'s make some facial masks!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'seaFoodProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '700041',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_gulfweed.png',
             'text' => 'Process __total Gulfweed in Seafood House',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '32016',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_clay_facial_mask.png',
             'text' => 'Craft __total Clay Facial Masks in Beauty Shop',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '32019',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_rose_facial_mask.png',
             'text' => 'Craft __total Rose Facial Masks in Beauty Shop',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success II',
         'description' => 'With the combination of our secret techniques and our fresh ingredients, the products turned out to be amazing!',
      ),
    ),
  ),
   24003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24003',
       'title' => 'Recipe for Success III',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'While we are completing all the tasks for today, I will tell you the story of how our farm became famous! But please help me finish the tasks for today.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'seaFoodProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '700036',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_coral.png',
             'text' => 'Process __total Coral in Seafood House',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '30134',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_goose_feather.png',
             'text' => 'Produce __total Goose Feathers',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '32015',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_goose_feather_earring.png',
             'text' => 'Craft __total Goose Feather Earrings in Beauty Shop',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success III',
         'description' => 'I bet these earrings are going to be a new trend this summer! Ok, back to our story.',
      ),
    ),
  ),
   24004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24004',
       'title' => 'Recipe for Success IV',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Really?',
       'description' => 'When I was young and didn\'t have any experience in farming, our farm business wasn\'t successful and we didn\'t know how to attract new customers. The only dishes I knew were peach dishes.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '200528',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_sugar_beet.png',
             'text' => 'Harvest __total Sugar Beets',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600066',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_peach_au_caramel.png',
             'text' => 'Prepare __total bowls of Peche au Caramel',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600067',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_peach_cobbler.png',
             'text' => 'Prepare __total Peach Cobblers',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success IV',
         'description' => 'Wow, that\'s impressive! Your peach dishes look much better than the ones I made when I was young!',
      ),
    ),
  ),
   24005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24005',
       'title' => 'Recipe for Success V',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Off to a good start!',
       'description' => 'One year our farm almost had no crops. And that was the time when I decided to seek help and advice from experienced farmers. So I went to a Farm Conference to learn about beauty products and seafood!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600109',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_crab_meat_yi_mein.png',
             'text' => 'Prepare __total plates of Crab Meat Yi Mein',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600113',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_wakame_salad.png',
             'text' => 'Prepare __total plates of Wakame Salad',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600114',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_seafood_salad.png',
             'text' => 'Prepare __total plates of Seafood Salad',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success V',
         'description' => 'We\'re lucky to always have fresh ingredients straight from the sea!',
      ),
    ),
  ),
   24006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24006',
       'title' => 'Recipe for Success VI',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'No kidding!',
       'description' => 'I met Ol\' MacDonald\'s sister there and saw her presentation on the \'Usage of a Beauty Shop for successful farming\'. I thought that idea was amazing! So after the presentation I asked her for advice on producing beauty products!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '32010',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_red_cord_necklace.png',
             'text' => 'Craft __total Red Cord Necklaces in Beauty Shop',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '32012',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_pearl_necklace.png',
             'text' => 'Craft __total Pearl Necklaces in Beauty Shop',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '32024',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_banana_facial_mask.png',
             'text' => 'Craft __total Banana Facial Masks in Beauty Shop',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success VI',
         'description' => 'We\'ve learned how to create beautiful accessories and cosmetics with farm items and items that can be collected from the sea.',
      ),
    ),
  ),
   24007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24007',
       'title' => 'Recipe for Success VII',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Good idea!',
       'description' => 'We have not only improved in making beauty products, but we also came up with a new strategy for our seafood dishes! Let\'s prepare some to see how it tastes!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600171',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_pickled_cabbage.png',
             'text' => 'Prepare __total bowls of Pickled Cabbage',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '30312',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_smoked_mackerel.png',
             'text' => 'Produce __total Smoked Mackerel in the Smoke House',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600170',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_spicy_fish.png',
             'text' => 'Prepare __total bowls of Spicy Fish',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24008',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success VII',
         'description' => 'Perfect! These dishes didn\'t take much time and they are really delicious!',
      ),
    ),
  ),
   24008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24008',
       'title' => 'Recipe for Success VIII',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'That\'s great!',
       'description' => 'With the seafood business growing bigger and bigger, we tried more new products and styles! That was a big success because our farm became famous all over the world for fresh and unique seafood dishes and quality beauty products.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600172',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_boiled_fish_with_pickled_cabbage.png',
             'text' => 'Prepare __total bowls of Boiled Fish with Pickled Cabbage',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600163',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_sticky_rice.png',
             'text' => 'Prepare __total portions of Sticky Rice',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success VIII',
         'description' => 'Yummy, these dishes are our family\'s specialty!',
      ),
    ),
  ),
   24009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24009',
       'title' => 'Recipe for Success IX',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'You\'re right!',
       'description' => 'Since that moment, we always tried new things and were not scared of change! I think this is the secret of success! It is not enough to be a good farmer, it is important to be creative in discovering new possibilities and have good taste!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600164',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_sweet_mango.png',
             'text' => 'Prepare __total bowls of Sweet Mango',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600165',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_mango_with_sticky_rice.png',
             'text' => 'Prepare __total plates of Mango with Sticky Rice',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '780',
             'experience' => '111',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success IX',
         'description' => 'Good job! Now you know the secret of a successful farm.',
      ),
    ),
  ),
   24010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24010',
       'title' => 'Recipe for Success X',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'I\'m curious!',
       'description' => 'By the way, have you heard about our latest beauty products? All our customers love it! I\'m sure you will be blown away too after you try it out yourself.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish __total times with the Squid Hook',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'seaFoodProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '700024',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_scallop.png',
             'text' => 'Process __total Scallops in the Seafood House',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '32023',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_pearl_hydrating_mask.png',
             'text' => 'Craft __total Pearl Hydrating Masks in the Beauty Shop',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '24011',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success X',
         'description' => 'Unbelievable! This facial mask is magical! Don\'t you feel refreshed after using it?',
      ),
    ),
  ),
   24011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '24011',
       'title' => 'Recipe for Success XI',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'No problem!',
       'description' => 'Now I want you to make something special for Ol\' MacDonald\'s sister. She is the one who helped me discover my recipe for success, and she is the one who introduced me to Ol\' MacDonald!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish __total times with the Squid Hook',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'seaFoodProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '700036',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_coral.png',
             'text' => 'Process __total Corals in Seafood House',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '32026',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_coral_rose_mirror.png',
             'text' => 'Craft __total Coral Rose Mirrors in Beauty Shop',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1014',
             'experience' => '145',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Recipe for Success XI',
         'description' => 'Such a special gift! I think you\'ve created a new bestseller!',
      ),
    ),
  ),
   26001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26001',
       'title' => 'Felicia\'s Cooking Stand',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Great!',
       'description' => 'We\'ve got a new cooking stand on the farm! I\'m so happy! Now I can invite my neighbors to enjoy my delicious food!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '670000',
             'icon_url' => 'images/task/st_cooking_stand.png',
             'text' => 'Place a Cooking Stand on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600002',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_honey_syrup.png',
             'text' => 'Prepare 5 jars of Honey Syrup',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '585',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Cooking Stand',
         'description' => 'Food\'s ready! Let\'s wait for our first customers!',
      ),
    ),
  ),
   26003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26003',
       'title' => 'Neighbors\' Day I',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Of course!',
       'description' => 'It\'s such a beautiful day today! Since it\'s Neighbors\' Day, I have an idea. Let\'s take a break and invite some neighbors for a picnic in the forest near the lake! Can you help me to finish the work on the farm first?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '30146',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_lotus_flower.png',
             'text' => 'Harvest __total Lotus Flowers',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '33',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_carrot.png',
             'text' => 'Harvest 100 Carrots',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '600323',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_carrot_cupcakes.png',
             'text' => 'Prepare 15 Carrot Cupcakes',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '600',
             'experience' => '15',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Neighbors\' Day I',
         'description' => 'The food is great! I really enjoy this lovely day!',
      ),
    ),
  ),
   26004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26004',
       'title' => 'Neighbors\' Day II',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'No problem!',
       'description' => 'Did you hear that? I think I heard something behind those bushes in the lake... Oh! It\'s a cute little duck! He looks lost and hungry! But we have already finished all of our food! Can you prepare some more?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600321',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_butter_pie.png',
             'text' => 'Prepare 10 Butter Pies',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '62',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_grape_jam.png',
             'text' => 'Produce 50 jars of Grape Jam',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '200534',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_mapple_syrup.png',
             'text' => 'Harvest 12 Maple Syrup',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '800',
             'experience' => '16',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Neighbors\' Day II',
         'description' => 'You can see he was really hungry! I wonder what happened with his mom!',
      ),
    ),
  ),
   26005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26005',
       'title' => 'Neighbors\' Day III',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Good idea!',
       'description' => 'Grandma said we can take care of the little ducky, so cool! But we need to clean up the place, plant some flowers and prepare the habitat for this little fella! We can ask our neighbors for help, because it\'s a lot of work!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '16',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_wheat.png',
             'text' => 'Harvest 100 Wheat',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'friend_fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => 'friend_fertilize',
             'ignore_filter' => '1',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_fertilize_neighbor.png',
             'text' => 'Fertilize your neighbors\' farms 100 times',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '60',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_cherry.png',
             'text' => 'Harvest 12 Cherries',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '16',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Neighbors\' Day III',
         'description' => 'They are always so helpful! It\'s good to have such good neighbors!',
      ),
    ),
  ),
   26006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26006',
       'title' => 'Neighbors\' Day IV',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Cucumber!',
       'description' => 'With the help of our neighbors, the pond is almost ready! We should harvest some food for our new little friend. What do you think he\'d like to eat?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '30128',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_cucumber.png',
             'text' => 'Harvest __total Cucumbers',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '13',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_corn.png',
             'text' => 'Harvest __total Corn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '200423',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_oat.png',
             'text' => 'Harvest __total Oat',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1200',
             'experience' => '16',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Neighbors\' Day IV',
         'description' => 'He looks much happier now!',
      ),
    ),
  ),
   26007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26007',
       'title' => 'Neighbors\' Day V',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Can I swim too?',
       'description' => 'We couldn\'t finish the habitat without the help of our neighbors! So let\'s prepare some gifts and invite them over to see our cute little duck swim in his new home: the duck habitat!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '500001',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_cheese_burger.png',
             'text' => 'Produce __total Cheese Burgers',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600188',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_pierogi.png',
             'text' => 'Prepare __total plates of Pierogi',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '200003',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_white_wine.png',
             'text' => 'Produce __total bottles of White Wine',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1400',
             'experience' => '16',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Neighbors\' Day V',
         'description' => 'All of our neighbors showed up and adored the new duck habitat! Thanks for your help and happy Neighbors\' Day!',
      ),
    ),
  ),
   26008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26008',
       'title' => 'Garden Party I',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'No worries!',
       'description' => 'Summer calls for supper under an open sky! How about we throw a nice little garden party for our friends and neighbors? Everyone\'s invited! But perhaps we should clean up a bit first...',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '16',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_wheat.png',
             'text' => 'Harvest __total Wheat',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '49',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest __total Apples',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '600',
             'experience' => '15',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Garden Party I',
         'description' => 'Thanks! Now the farm is nice and tidy! ',
      ),
    ),
  ),
   26009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26009',
       'title' => 'Garden Party II',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Sounds amazing!',
       'description' => 'Do you know what I love most about parties? Planning them! Ah... I can already see our garden beautifully decorated with lights and flowers... It\'s going to be just perfect!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '30073',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_lavender.png',
             'text' => 'Harvest __total Lavender',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '15',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Harvest __total Clover',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '60',
             'spend_rp' => '16',
             'icon_url' => 'images/task/st_cherry.png',
             'text' => 'Harvest __total Cherries',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '800',
             'experience' => '16',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Garden Party II',
         'description' => 'It looks fabulous! I should become a professional party planner!',
      ),
    ),
  ),
   26010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26010',
       'title' => 'Garden Party III',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'It\'s cooking time!',
       'description' => 'Obviously, we can\'t organize a fancy dinner party without anything to eat! Let\'s go to the kitchen and check out what delicious seasonal dishes we could make for our friends!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '600191',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_polish_donut.png',
             'text' => 'Prepare __total Polish Donuts',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600290',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_apple_tarlet.png',
             'text' => 'Prepare __total Apple Tarts',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '600219',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_sandwiches.png',
             'text' => 'Prepare __total Sandwiches',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26011',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '16',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Garden Party III',
         'description' => 'I\'m getting hungry just looking at all the food! Oh my, what time is everyone coming? I must resist!',
      ),
    ),
  ),
   26011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26011',
       'title' => 'Garden Party IV',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'I have some ideas!',
       'description' => 'From my experience, I can tell you that the key to a successful garden party is a variety of refreshing drinks! Could you help me think of some nice summer drinks?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '600302',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_apple_milkshake.png',
             'text' => 'Prepare __total bottles of Apple Milkshakes',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '600182',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_kvass.png',
             'text' => 'Prepare __total glasses of Kvass',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '200466',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_grape_juice.png',
             'text' => 'Produce __total glasses of Grape Juice',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26012',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1200',
             'experience' => '16',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Garden Party IV',
         'description' => 'The party is going to be awesome! I can\'t wait!',
      ),
    ),
  ),
   26012 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26012',
       'title' => 'Garden Party V',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Oh no!',
       'description' => 'The garden looks amazing! The food and drinks are almost ready and I\'m wearing my cutest outfit... But... Where is everyone? Oh, gosh! I forgot to send out the invitations!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'friend_fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => 'friend_fertilize',
             'ignore_filter' => '1',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_fertilize_neighbor.png',
             'text' => 'Fertilize your neighbors\' farms __total times',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '600004',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_orange_crumble.png',
             'text' => 'Prepare __total Orange Crumbles',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '30131',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_buffalo_milk_cheese.png',
             'text' => 'Produce __total Buffalo Milk Cheese',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1400',
             'experience' => '16',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Garden Party V',
         'description' => 'Phew, I had to visit all neighbors, but finally everyone is here! Time to start! Enjoy the party, my friend!',
      ),
    ),
  ),
   26013 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26013',
       'title' => 'Oil Press Trip I',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Congratulations boy!',
       'description' => 'Last week our teacher asked us to write about our favorite farm product. The best writer will get to choose the next outing destination. The truth is I\'ve never seen an oil press before and my essay won!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '200404',
             'icon_url' => 'images/task/st_oil_press.png',
             'text' => 'Place the Oil Press on your Farm',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '9121',
             'shopping' => '1',
             'icon_url' => 'images/task/st_sunflower.png',
             'text' => 'Plant __total Sunflowers',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '9122',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_sunflower.png',
             'text' => 'Harvest  __total Sunflowers',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26014',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '25',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Oil Press Trip I',
         'description' => 'Destination: Master Oliver\'s Farm!! He is the best oil producer in town. Should I bring his poster so he can sign it?',
      ),
    ),
  ),
   26014 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26014',
       'title' => 'Oil Press Trip II',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'You lucky boy!',
       'description' => 'I\'m so excited!! We\'re gonna leave pretty early in the morning so grandma prepared some snacks and lunch boxes for me. I have the best Grandma in the world! Don\'t you think?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600077',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_spicy_steak_burger.png',
             'text' => 'Prepare __total Spicy Steak Burgers',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '18',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_wheat_flour.png',
             'text' => 'Produce __total sacks of Wheat Flour',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '200405',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_sunflower_oil.png',
             'text' => 'Produce  __total bottles of Sunflower Oil',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26015',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'items' => '410001:1',
             'experience' => '26',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Oil Press Trip II',
         'description' => 'Eating from the lunch box makes the food tastier.. I wonder why..',
      ),
    ),
  ),
   26015 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26015',
       'title' => 'Oil Press Trip III',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'I can!',
       'description' => 'We\'re here! Look at those cool buildings over there! The Old Farmer said there are two different ways to extract oil: the classic way and the modern way and... Omg can you smell the flavor of fresh pressed olive oil?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '154',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_pumpkin.png',
             'text' => 'Harvest __total Pumpkins',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '40009',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_duck_egg.png',
             'text' => 'Collect __total Duck Eggs',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '200009',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_pitaya_jam.png',
             'text' => 'Produce __total jars of Pitaya Jam',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26016',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '27',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Oil Press Trip III',
         'description' => 'That was amazing... Fresh olive oil on toasted bread! Simple yet delicious!!',
      ),
    ),
  ),
   26016 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26016',
       'title' => 'Oil Press Trip IV',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'So complicated!',
       'description' => 'So the classic way is typically using vertical millstones moving around a central post to crush or bruise the seeds or fruit which can then be stamped or pressed to extract the oil.. Does it sound complicated as I think?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '2',
             'filter' => '20007',
             'shopping' => '1',
             'icon_url' => 'images/task/st_olive_tree.png',
             'text' => 'Have __total Olive Trees on your farm',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '20008',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_olive.png',
             'text' => 'Harvest __total Olives',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '20011',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_olive_oil.png',
             'text' => 'Produce __total bottles of Olive Oil',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26017',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'items' => '410001:1',
             'experience' => '28',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Oil Press Trip IV',
         'description' => 'The classic method is cool.. But I\'m wondering what can you do with the modern way!!',
      ),
    ),
  ),
   26017 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26017',
       'title' => 'Oil Press Trip V',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Incredible!',
       'description' => 'The modern way is different. The new oil mill can process 4K tons per day hot pressed or 25 tons cold pressed. They often crush the raw materials continuously, before extracting the oil from the press cake!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '20145',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_turkey_meat.png',
             'text' => 'Produce __total Turkeys',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '65014',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_turkey_sausage.png',
             'text' => 'Produce __total Turkey Sausages',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '600110',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_cooking_wine.png',
             'text' => 'Produce __total bottles of Cooking Wine',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26018',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '29',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Oil Press Trip V',
         'description' => 'Wow.. There is so much to learn! But Master Oliver\'s words are so passionate that everyone who hears them will share the love for oil!',
      ),
    ),
  ),
   26018 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26018',
       'title' => 'Oil Press Trip VI',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Erhm.. Almond oil?',
       'description' => 'The Old Farmer challenged us with a game. What we\'re gonna do is think about a special oil that doesn\'t exist or we haven\'t tried yet. And later he will show us how to produce it. Any suggestions?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '20006',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_peanut.png',
             'text' => 'Harvest __total Peanuts',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '20010',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_peanut_oil.png',
             'text' => 'Produce __total bottles of Peanut Oil',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '600234',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_spinach_salad.png',
             'text' => 'Prepare __total plates of Spinach Salad',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26019',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'items' => '410001:1',
             'experience' => '30',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Oil Press Trip VI',
         'description' => 'Our idea was good! But spicy flavoured oil?! Wow that was brilliant.. Chapeau!',
      ),
    ),
  ),
   26019 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26019',
       'title' => 'Oil Press Trip VII',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Me!!',
       'description' => 'The oil we produced is incredible! We must try and prepare awesome food with it... Oh boy.. I\'m drooling already? Who\'s hungry?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '20004',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_venison_steak.png',
             'text' => 'Produce __total Venison Steak',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '200529',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_caramel.png',
             'text' => 'Produce __total Caramel',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '600353',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_pasta_salad.png',
             'text' => 'Prepare __total Pasta Salads',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26020',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '31',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Oil Press Trip VII',
         'description' => 'Master Oliver said it\'s getting close to dinner time and suggests to collect all the ingredients we like.. Can he also cook?',
      ),
    ),
  ),
   26020 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26020',
       'title' => 'Oil Press Trip VIII',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Oily fun forever!',
       'description' => 'Master Oliver is indeed the best! Awesome experience and good explanation! He is my new hero! He even gave us some amazing oil to try. The dinner tonight will be super tasty!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '20001',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_bean.png',
             'text' => 'Harvest __total Beans',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '20012',
             'spend_rp' => '35',
             'icon_url' => 'images/task/st_bean_oil.png',
             'text' => 'Produce __total bottles of Bean Oil',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600125',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_sweet_sour_shrimp.png',
             'text' => 'Prepare __total plates of Sweet and Sour Shrimp',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'items' => '410001:3',
             'experience' => '32',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Oil Press Trip VIII',
         'description' => 'I think now we can also try to make oil on our own farm! I can\'t wait to share everything with Grandma and Felicia! What a great day!',
      ),
    ),
  ),
   26021 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26021',
       'title' => 'Let\'s get healthy',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 0,
       'visible' => 'TRUE',
       'des_button' => 'Great idea!',
       'description' => 'My school will start off with a health awareness week! But I don\'t really like to cook. So lets build a Salad Machine instead! Now we just need to find the right materials.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'finish_order',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'order',
             'icon_url' => 'images/task/st_finish_order.png',
             'text' => 'Complete the Orders on the Order Board',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '14',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_tomato.png',
             'text' => 'Harvest __total Tomatoes',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '200540',
             'shopping' => '1',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_salad_machine.png',
             'text' => 'Place a Salad Machine on your farm',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '32',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Let\'s get healthy',
         'description' => 'Thanks for helping! We just need to build it one item at a time!',
      ),
    ),
  ),
   26022 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26022',
       'title' => 'The Final Touch I',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Good idea!',
       'description' => 'Wow, the Salad Machine is coming along really nicely! But I feel that we\'re still missing something, but what? I hope Felicia has some nice ideas... Let\'s go ask her, but first let\'s feed the animals!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '16',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_wheat.png',
             'text' => 'Harvest __total Wheat',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '17',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_milk.png',
             'text' => 'Collect __total Milk',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '58',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_orange.png',
             'text' => 'Harvest __total Oranges',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26023',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '210',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Final Touch I',
         'description' => 'I think I\'m done here, let\'s go to see Felicia!',
      ),
    ),
  ),
   26023 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26023',
       'title' => 'The Final Touch II',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'No problem!',
       'description' => 'Felicia heard about a "Veggie Fair". That would be a great place to get some ideas! But first, let\'s start with the most important meal of the day. Can you help prepare breakfast?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600018',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_sunrise_porridge.png',
             'text' => 'Prepare __total bowls of Sunrise Porridge',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '600302',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_apple_milkshake.png',
             'text' => 'Prepare __total bottles of Apple Milkshake',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600035',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_oat_fruit_bread.png',
             'text' => 'Prepare __total loaves of Whole Oat Fruit Bread',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26024',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '210',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Final Touch II',
         'description' => 'Never knew a healthy breakfast can be delicious too! Thanks for the help!',
      ),
    ),
  ),
   26024 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26024',
       'title' => 'The Final Touch III',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Let\'s go have a look!',
       'description' => 'This fair is bigger than I thought! There are so many farmers from all over the world! I think we will see some very cool things here. Where shall we start?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'friend_fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => 'friend_fertilize',
             'ignore_filter' => '1',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_fertilize_neighbor.png',
             'text' => 'Fertilize your neighbors\' farms __total times',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '80',
             'filter' => '35',
             'spend_rp' => '40',
             'icon_url' => 'images/task/st_angora_hair.png',
             'text' => 'Produce __total bundles of Angora Hair',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '600049',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_cheese_salad.png',
             'text' => 'Prepare __total Cheese Salad',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26025',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '220',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Final Touch III',
         'description' => 'I\'m getting good ideas already! Let\'s see what else we can visit!',
      ),
    ),
  ),
   26025 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26025',
       'title' => 'The Final Touch IV',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Sounds really yummy!',
       'description' => 'That looks like a Belgian stand, let\'s take a look. Mmm... what\'s in it? Oh, I see, so there\'s apples, almonds and to top it off: mayonnaise.',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '49',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest __total Apples',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '200437',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_mayonnaise.png',
             'text' => 'Produce __total bottles of Mayonnaise',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '20152',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_almond.png',
             'text' => 'Harvest __total Almonds',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26026',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '220',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Final Touch IV',
         'description' => 'What a yummy combination! I would have never thought of this!',
      ),
    ),
  ),
   26026 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26026',
       'title' => 'The Final Touch V',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Let\'s try!',
       'description' => 'What\'s next? This looks really exotic! The farmer said he\'s from Turkey and he likes to have salad with grains or lentils. Sounds good, let\'s have a taste!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '6004',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_rice.png',
             'text' => 'Harvest __total Rice',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '200466',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_grape_juice.png',
             'text' => 'Produce __total glasses of Grape Juice',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '600378',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_gyros.png',
             'text' => 'Prepare __total plates of Gyros',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26027',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Final Touch V',
         'description' => 'This also tasted delicious. I should try new things more often!',
      ),
    ),
  ),
   26027 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26027',
       'title' => 'The Final Touch VI',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Thanks for the help!',
       'description' => 'There are still so many stands to visit, but where has Felicia gone to? Oh, there she is! She was looking at some cute wooden buckets for the Salad Machine. That\'s really sweet of her!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '600300',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_cendol.png',
             'text' => 'Prepare __total bowls of Cendol',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '500002',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_veggie_burger.png',
             'text' => 'Produce __total Veggie Burgers',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600214',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_carrot_crescent.png',
             'text' => 'Prepare __total Stuffed Carrot Pastries',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26028',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Final Touch VI',
         'description' => 'That bucket will be a perfect addition to our Salad Machine!',
      ),
    ),
  ),
   26028 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26028',
       'title' => 'The Final Touch VII',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'I\'m really excited!',
       'description' => 'Ok, I think I have enough inspiration. Let\'s head home to finish the Salad Machine. I can\'t wait to show it to Grandma!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '100',
             'filter' => '30130',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_buffalo_milk.png',
             'text' => 'Produce __total bottles of Buffalo Milk',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '600307',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_coffee_biscuit.png',
             'text' => 'Prepare __total plates of Coffee Biscuits',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600042',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lychee_scone.png',
             'text' => 'Prepare __total Lychee Scones',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Final Touch VII',
         'description' => 'Yeah, it\'s finally finished! Let\'s show it to everybody and come up with some new and healthy dishes!',
      ),
    ),
  ),
   26029 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26029',
       'title' => 'Time to scare people!',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 22,
       'visible' => 'TRUE',
       'des_button' => 'Let\'s do it!',
       'description' => 'I am already in a Halloween mood! I love this time of the year; you can wear cool stuff, scare people and you get sweets! I know the right thing for the farm! Can you help me?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '700061',
             'properties' => 'fishing_hook:700061',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_halloween_hook.png',
             'text' => 'Fish __total times with the Halloween Hook',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '154',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_pumpkin.png',
             'text' => 'Harvest __total Pumpkins',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Time to scare people!',
         'description' => 'Oh that is looking good already! Let\'s finish this before Halloween!',
      ),
    ),
  ),
   26030 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26030',
       'title' => 'Harvest Time',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Let\'s do it!',
       'description' => 'Autumn is here and the leaves have already changed to a beautiful yellow and red color! This is the time to appreciate the harvest! Let\'s prepare some space on our farm to show our appreciation of harvest time!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '58',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_orange.png',
             'text' => 'Harvest __total Oranges',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '600107',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_stock.png',
             'text' => 'Prepare __total bowls of Stock',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Harvest Time',
         'description' => 'This looks great on the farm! I look forward to completing it!',
      ),
    ),
  ),
   26031 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26031',
       'title' => 'The Biggest Harvest I',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Come and have a look!',
       'description' => 'Hi Farmer! How do you like the beautiful red maple leaves in the mountains? Our family just came back from the mountains and it is spectacular! I\'ve collected some beautiful leaves for you!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '58',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_orange.png',
             'text' => 'Harvest __total Oranges',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '49',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest __total Apples',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '9412',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_love_fruit.png',
             'text' => 'Harvest __total Love Fruits',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26032',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Biggest Harvest I',
         'description' => 'I will be super happy if you like the leaves I brought. I wanna make some bookmarks out of them.',
      ),
    ),
  ),
   26032 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26032',
       'title' => 'The Biggest Harvest II',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Together we are faster!',
       'description' => 'Oh, you are planning a trip to the mountain as well? Hurry up! I heard there is a storm coming so you might not have a clear view. But there is still some work to be done on the farm. So let\'s get started!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '17',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_milk.png',
             'text' => 'Collect __total bottles of Milk',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '46',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_honey.png',
             'text' => 'Collect __total jars of Honey',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '20115',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_beef.png',
             'text' => 'Produce __total Beef',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26033',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Biggest Harvest II',
         'description' => 'Nice work! I\'ve prepared some food for you. Have a nice trip!',
      ),
    ),
  ),
   26033 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26033',
       'title' => 'The Biggest Harvest III',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'How is it?',
       'description' => 'Welcome back farmer! How was your trip? Wow! You brought so many fruits home. I heard there is a big festival called "The Last Harvest" in Richard\'s Orchard in the foothills! Have you been there?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '200468',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_orange_juice.png',
             'text' => 'Produce __total glasses of Orange Juice',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '65017',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_love_cake.png',
             'text' => 'Produce __total Love Cakes',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '30095',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_beef_salami.png',
             'text' => 'Produce __total Beef Salami',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26034',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Biggest Harvest III',
         'description' => 'Tell me more about the harvest festival please! I really wanna join it. Is it too late?',
      ),
    ),
  ),
   26034 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26034',
       'title' => 'The Biggest Harvest IV',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Let\'s do it!',
       'description' => 'The Last Harvest sounds really interesting, but unfortunately it already ended in Richard\'s Orchard. Such a pity... But why don\'t we hold our own festival? Let\'s call it The Biggest Harvest!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600003',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_apple_cheese.png',
             'text' => 'Prepare __total Cheese Apple dishes',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '600139',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_taai_taai.png',
             'text' => 'Prepare __total Taai Taai',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '600189',
             'spend_rp' => '16',
             'icon_url' => 'images/task/st_sour_cream.png',
             'text' => 'Prepare __total bowls of Sour Cream',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26035',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Biggest Harvest IV',
         'description' => 'I want to invite everyone in town!',
      ),
    ),
  ),
   26035 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26035',
       'title' => 'The Biggest Harvest V',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Great idea!',
       'description' => 'Here\'s the idea! Let\'s invite everyone in town and divide everyone into ten teams. We will give every team a list of fruits, crops and products they need to collect. The team that collects most within two hours will win the game!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '500073',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_pecan.png',
             'text' => 'Harvest __total Pecans',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '65006',
             'spend_rp' => '40',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Produce __total loaves of Corn Bread',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '600050',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_pecan_bread.png',
             'text' => 'Prepare __total baskets of Pecan Bread',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '26036',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Biggest Harvest V',
         'description' => 'Everything is set up and everyone is ready! I can\'t wait to watch the big competition!',
      ),
    ),
  ),
   26036 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26036',
       'title' => 'The Biggest Harvest VI',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 18,
       'visible' => 'TRUE',
       'des_button' => 'Winner is coming!',
       'description' => 'Can you see how excited everyone is to win the game? I bet Team 1 will be the winner! I love The Biggest Harvest!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '9122',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_sunflower.png',
             'text' => 'Harvest __total Sunflowers',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '9705',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_sunflower_bouquet.png',
             'text' => 'Produce __total Sunflower Bouquets',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '200535',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_maple_sugar.png',
             'text' => 'Produce __total Maple Sugar',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Biggest Harvest VI',
         'description' => 'Are you looking forward to the winner? Yes, Team 1 is the winner! They will get all they made for free!',
      ),
    ),
  ),
   26037 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26037',
       'title' => 'Snow Time',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 16,
       'visible' => 'TRUE',
       'des_button' => 'Hide!',
       'description' => 'Oh wow look, it\'s snowing! Let’s call Darryl and go out to play in the snow! I love making snow angels, and we\'ll need all the snow we can get! - Oh no, Darryl used all the good snow to make snowballs!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'finish_order',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'order',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_order.png',
             'text' => 'Complete the Orders on the Order Board',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600139',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_taai_taai.png',
             'text' => 'Prepare __total Taai Taai',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Snow Time',
         'description' => 'Oh no, the snow is all messed up now. Lets see if we can still find a nice snowy place for making snow angels.',
      ),
    ),
  ),
   26038 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26038',
       'title' => 'Ice Fishing',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 23,
       'visible' => 'TRUE',
       'des_button' => 'Hide!',
       'description' => 'Our teacher let us read another Bobo Bear Story. This time he is Ice Fishing. That sounds cool. I want to try this too! Where is the next lake?',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '700005',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish __total times with the Squid Hook',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600174',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_egg_soup.png',
             'text' => 'Prepare __total bowls of Egg Soup',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Ice Fishing',
         'description' => 'This was fun. Would love to go Ice Fishing every day! Let\'s finish some Weekly Activities for more Ice fun.',
      ),
    ),
  ),
   26040 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '26040',
       'title' => 'Lovely Planter Box',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 23,
       'visible' => 'TRUE',
       'des_button' => 'Let\'s do it!',
       'description' => 'Spring is coming soon and with it the Love Season. I want to be prepared with a nice place for some more nice fresh flowers on the farm and for couples to sit!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '60',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_cherry.png',
             'text' => 'Harvest __total times from Cherry trees',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600009',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_light_muffin.png',
             'text' => 'Prepare __total Light Muffins',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '100',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Lovely Planter Box',
         'description' => 'Thanks for helping out.',
      ),
    ),
  ),
   27050 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27050',
       'title' => 'Good Boy 2016 1/16',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 12,
       'visible' => 'TRUE',
       'des_button' => 'Where shall we start?',
       'description' => 'Time flies so fast. It\'s already 2016! I want to improve myself to be a better person for grandma, my father, and Felicia. Let\'s start with my first new year\'s resolution. Let\'s prepare breakfast for everyone!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '13',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_corn.png',
             'text' => 'Harvest __total Corn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '16',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_wheat.png',
             'text' => 'Harvest  __total Wheat',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '65006',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Produce  __total loaves of Cornbread',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '27051',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '210',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Good Boy 2016 1/16',
         'description' => 'Mmmm... I can smell that freshly baked Cornbread. Yummy!',
      ),
    ),
  ),
   27051 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27051',
       'title' => 'Good Boy 2016 2/16',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 12,
       'visible' => 'TRUE',
       'des_button' => 'Give me 5 mins !',
       'description' => 'All done. Let\'s call everyone for breakfast! Hang on I think something is missing. Oh that\'s right! fresh fruit jam from farm and...yes omelet!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '58',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_orange.png',
             'text' => 'Collect __total Oranges',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '21',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_egg.png',
             'text' => 'Collect __total  Eggs',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '64',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_orange_jam.png',
             'text' => 'Produce __total jars of Orange Jam',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '27052',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '220',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Good Boy 2016 2/16',
         'description' => 'Enjoy your meal!',
      ),
    ),
  ),
   27052 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27052',
       'title' => 'Good Boy 2016 3/16',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 12,
       'visible' => 'TRUE',
       'des_button' => 'Hurry up!',
       'description' => 'Everyone loves my breakfast! Feel so glad when I see my loved ones happy. Anyway, Tomorrow is a Childen\'s day and my father said we can organize a party for this special day if we finish all tasks.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'finish_order',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'order',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_order.png',
             'text' => 'Complete the Orders on the Order Board',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '700005',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish  __total times using the Squid Hook',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'beautyShopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '32016',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_clay_facial_mask.png',
             'text' => 'Craft __total Clay Facial Masks in Beauty Shop',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '27053',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '220',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Good Boy 2016 3/16',
         'description' => 'We are nearly of our goal!',
      ),
    ),
  ),
   27053 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27053',
       'title' => 'Good Boy 2016 4/16',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 12,
       'visible' => 'TRUE',
       'des_button' => 'Yum Yum...',
       'description' => 'Yay! We finally made it! The place checked. Let\'s go prepare some food farmer. It\'s a Children\'s Day so we should have a lot of snack and sweets otherwise kids will get bored!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '200534',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_mapple_syrup.png',
             'text' => 'Harvest __total  Maple Syrup',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600138',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_pepernoten.png',
             'text' => 'Prepare __total Pepernoten',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600239',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_candied_apple.png',
             'text' => 'Prepare __total Candied Apples',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '27054',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Good Boy 2016 4/16',
         'description' => 'The food is ready as well. What\'s else we need to do? ',
      ),
    ),
  ),
   27054 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27054',
       'title' => 'Good Boy 2016 5/16',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 12,
       'visible' => 'TRUE',
       'des_button' => 'Yay! ',
       'description' => 'Drink is a must for every party and kids always fancy colorful drinks. Why not harvest fruits to make juices? I think after we finish preparing beverage party can be on!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '200466',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_grape_juice.png',
             'text' => 'Produce __total glasses of Grape Juice',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600007',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_lemon_champagne.png',
             'text' => 'Prepare __total  pitchers of Lemon Champagne',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600167',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_coconut_milk.png',
             'text' => 'Prepare __total glasses of Coconut Milk',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'items' => '500238:1',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Good Boy 2016 5/16',
         'description' => 'Well done farmer! Hope everyone will enjoy this party. Happy Children\'s Day! ',
      ),
    ),
  ),
   27080 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27080',
       'title' => 'Happy Songkran  Day 1',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 15,
       'visible' => 'TRUE',
       'des_button' => 'Time to get fresh !!!',
       'description' => 'The Hot weather in April make me thinking about a festival in Thailand call Songkran or Thai New Year,is the day that people must be out for splashing water. I wish we can do it in our farm. But now I feel so dry ,let get some juice first!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '200467',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_apple_juice.png',
             'text' => 'Produce __total  glasses of Apple Juice',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '200468',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_orange_juice.png',
             'text' => 'Produce __total  glasses of Orange Juice',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '200466',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_grape_juice.png',
             'text' => 'Produce __total glasses of Grape Juice',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '27081',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '2500',
             'experience' => '210',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Happy Songkran  Day 1',
         'description' => 'Juice always make me fresh and there are benefits too!',
      ),
    ),
  ),
   27081 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27081',
       'title' => 'Happy Songkran  Day 2',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 15,
       'visible' => 'TRUE',
       'des_button' => 'We can do it !',
       'description' => 'I told grandma about Songkran and she tell me If we can finished all order in farm, we will celebrate this with our neighbours. Oh I need an assistant, Felicia can you help me ?!?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'finish_order',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'order',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_order.png',
             'text' => 'Complete the Orders on the Order Board',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '65006',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Produce __total  loaves of Corn Bread',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600200',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_sweet_dumpling.png',
             'text' => 'Prepare __total  Sweet Dumplings',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '27082',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '2500',
             'experience' => '220',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Happy Songkran  Day 2',
         'description' => 'Almost done! can\'t wait ti see you Songkran! ',
      ),
    ),
  ),
   27082 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27082',
       'title' => 'Happy Songkran  Day 3',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 15,
       'visible' => 'TRUE',
       'des_button' => 'Felicia give me a sec',
       'description' => 'Seems like Felicia so hungry.I\'d better be prepared lunch for Felicia. Otherwise, she will have no engry for helping me in this afternoon and my dream about Songkran water car can not be ture. I would not decisive!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'beginFish',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '700005',
             'properties' => 'fishing_hook:700005',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_squid_hook.png',
             'text' => 'Fish __total  times with the Squid Hook',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600177',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_baked_tilapia.png',
             'text' => 'Prepare __total  plates of Baked Tilapia',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600069',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_orange_smoothie.png',
             'text' => 'Prepare __total  bowls of Orange Smoothie',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '27083',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '2500',
             'experience' => '220',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Happy Songkran  Day 3',
         'description' => 'Great food is the best way to start your day! We have plenty of energy now',
      ),
    ),
  ),
   27083 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27083',
       'title' => 'Happy Songkran  Day 4',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 15,
       'visible' => 'TRUE',
       'des_button' => 'Now it\'s time to brainstorm!',
       'description' => 'Yeah! finally, we have done! now it\'s time to prepare our Songkran festival. Dad told me that he will drive for us,Nothing is better than this!  So let start from decorate our Songkran water car Hehehe!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '9118',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_daisy.png',
             'text' => 'Harvest  __total Daisy',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '5006',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_red_rose.png',
             'text' => 'Harvest __total  Red Roses',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '30073',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_lavender.png',
             'text' => 'Harvest __total Lavender',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '27084',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '2500',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Happy Songkran  Day 4',
         'description' => 'So Colorful!!',
      ),
    ),
  ),
   27084 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '27084',
       'title' => 'Happy Songkran  Day 5',
       'scene' => 1,
       'npc' => '1',
       'unlock_level' => 15,
       'visible' => 'TRUE',
       'des_button' => 'Let get wet !!',
       'description' => 'Everthing is ready for the festival! Especially, the water that we gonna use for splash out, it  was fragrant with the scent of chamomile oil. It\'s time to go now.  I will bring some candy too. We can eat when we hungry and  also can share with our friends.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '20191',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_grape_candy.png',
             'text' => 'Produce __total Grape Candies',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '20194',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_apple_candy.png',
             'text' => 'Produce __total Apple Candies',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'friend_fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => 'friend_fertilize',
             'ignore_filter' => '1',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_fertilize_neighbor.png',
             'text' => 'Fertilize neighbors\' farms __total times',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '2500',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Happy Songkran  Day 5',
         'description' => 'Happy Songkran Day everyone !',
      ),
    ),
  ),
   28001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28001',
       'title' => 'Into the Woods I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Cool! Let\'s go!',
       'description' => 'Howdy Farmer! I found something amazing in the woods. It\'s a Gallery, an ancient place where you can present your farm successes and record all the farm activities. And If you don\'t believe me, come and see yourself!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'loadfarm',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'allfamilyfarmfriend',
             'icon_url' => 'images/task/st_sunglasses.png',
             'text' => 'Visit Darryl\'s Farm',
             'show_me' => '33',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '5',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_holsteincow_animals.png',
             'text' => 'Register the Holstein Cow in the Gallery',
             'show_me' => '34',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'feed_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '5',
             'icon_url' => 'images/task/st_holsteincow_animals.png',
             'text' => 'Feed the Holstein Cow 3 times',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '45',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods I',
         'description' => 'You were right! This gallery is really amazing!',
      ),
    ),
  ),
   28002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28002',
       'title' => 'Into the Woods II',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'We can try!',
       'description' => 'I like to present my nice farm in the gallery! But to make the Gallery more beautiful we need more things on the farm to present. Why don\'t we add some more decorations?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '17',
             'icon_url' => 'images/task/st_milk.png',
             'text' => 'Collect 3 bottles of Milk',
             'show_me' => '27',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '50',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_hay_bale.png',
             'text' => 'Register a Hay Bale in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28023',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '48',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods II',
         'description' => 'This already looks nicer! Grandma also said now it looks more like a farm!',
      ),
    ),
  ),
   28003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28003',
       'title' => 'Into the Woods III',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'We can not!',
       'description' => 'A Gallery with one farm decoration picture is boring. We should add one more! I know the perfect subject: How can we have a rich harvest without a Scarecrow to protect the crops?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '4',
             'icon_url' => 'images/task/st_plant_clover.png',
             'text' => 'Plant 3 Clovers',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '1001',
             'icon_url' => 'images/task/st_scarecrow.png',
             'text' => 'Get a Scarecrow',
             'shopping' => '1',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '1001',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_scarecrow.png',
             'text' => 'Register a Scarecrow in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '50',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods III',
         'description' => 'Now this looks more like a farm!',
      ),
    ),
  ),
   28004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28004',
       'title' => 'Into the Woods IV',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s show it off!',
       'description' => 'Grandma says I\'m the best Beekeeper she knows and she suggested me to show it in the Gallery.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '45',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_place_beehive.png',
             'text' => 'Register a Beehive in the Gallery',
             'show_me' => '34',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => 'fertilize',
             'ignore_filter' => '1',
             'icon_url' => 'images/task/st_use_superfertilizer_clover.png',
             'text' => 'Fertilize 3 Clovers',
             'show_me' => '14',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '46',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_honey.png',
             'text' => 'Collect 3 jars of Honey',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '53',
             'sup_fertilizer' => '5',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods IV',
         'description' => 'I am very proud of this! And now everyone who passes the Gallery can see it!',
      ),
    ),
  ),
   28005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28005',
       'title' => 'Into the Woods V',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s see!',
       'description' => 'Aw!! The Cow produced some more fresh milk.. Milk, milk, milk... Cheese!! What do you think? Do you think we can also present a Cheese master in the gallery?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '10',
             'properties' => 'raw_material:17',
             'icon_url' => 'images/task/st_add_milk_cheesemaster.png',
             'text' => 'Add 3 bottles of Milk to the Cheese Master',
             'show_me' => '29',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '10',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_cheese_machine.png',
             'text' => 'Register a Cheese Master in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '57',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods V',
         'description' => 'Yummy cheese! And now everyone knows we make delicious cheese here!',
      ),
    ),
  ),
   28006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28006',
       'title' => 'Into the Woods VI',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Great idea!',
       'description' => 'Making the Gallery nice is fascinating but tiring and it made me hungry. What about some sandwiches? First we need some Wheat Flour!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '3',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_plant_wheat.png',
             'text' => 'Plant 5 Wheat',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '6',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_dutch_mill.png',
             'text' => 'Register a Dutch Mill in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '60',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods VI',
         'description' => 'That was delicious. But I could still eat a snack!',
      ),
    ),
  ),
   28007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28007',
       'title' => 'Into the Woods VII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Healthy!',
       'description' => 'One apple a day will keep the doctor away. Let\'s get some apples so Grandma will stop bugging me!',
       'hint' => 'Register more items in the Gallery to receive more Gallery Points!',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '49',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest 2 Apples',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '48',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_apple_tree.png',
             'text' => 'Register an Apple Tree in the Gallery',
             'show_me' => '34',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_points',
             'total' => '10',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_gallery_points.png',
             'text' => 'Have 10 Gallery Points',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '65',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods VII',
         'description' => 'Yummy. Apples are indeed a good snack.',
      ),
    ),
  ),
   28008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28008',
       'title' => 'Into the Woods VIII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Yummy!',
       'description' => 'Now that the Wheat Flour is ready, we need a Baker to bake some bread.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '70',
             'properties' => 'raw_material:17',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_add_milk_baker.png',
             'text' => 'Add 3 bottles of Milk to the Baker',
             'show_me' => '18',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '70',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_baker.png',
             'text' => 'Register a Baker in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods VIII',
         'description' => 'Now I am full and the Gallery also looks really nice! What a successful day!',
      ),
    ),
  ),
   28009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28009',
       'title' => 'Photographer I',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Nice!',
       'description' => 'Darryl thinks he did a great job last time with the Gallery. I bet we can do better. With this vintage camera we\'re gonna take some amazing pictures for the Gallery.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'feed_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '200352',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_feed_buffalo.png',
             'text' => 'Feed Buffalo 3 times with Cucumbers',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '200352',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_buffalo.png',
             'text' => 'Register a Buffalo in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '250',
             'experience' => '25',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Photographer I',
         'description' => 'You were right! This camera can take some amazing pictures!',
      ),
    ),
  ),
   28010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28010',
       'title' => 'Photographer II',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Hurry!',
       'description' => 'I feel like I\'m a professional photographer. Oh right! Before I forget, I\'ve promised Grandma I\'ll help her with the Jam Machine in return for this beautiful camera. Let\'s go before she says anything!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '61',
             'properties' => 'raw_material:46',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_add_honey_jammachine.png',
             'text' => 'Add 3 jars of Honey to a Jam Machine',
             'show_me' => '10',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'refill_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '61',
             'properties' => 'raw_material:49',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_add_apple_jammachine.png',
             'text' => 'Add 3 Apples to a Jam Machine',
             'show_me' => '10',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '61',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_jam_machine.png',
             'text' => 'Register a Jam Machine in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28025',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '250',
             'items' => '590015:1',
             'experience' => '25',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Photographer II',
         'description' => 'Just in time! The Jam is delicious and I could take another photo as well!',
      ),
    ),
  ),
   28011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28011',
       'title' => 'Photographer III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Right',
       'description' => 'I can not find a good angle for a nice photo shoot. Don\'t you think this landscape is a bit empty? How about we add some items and spruce it up?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '590015',
             'icon_url' => 'images/task/st_get_stoneroad.png',
             'text' => 'Get the Stone Road from your Gift Box',
             'gogiftbox' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '590015',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_stone_road.png',
             'text' => 'Register Stone Road in the Gallery',
             'show_me' => '34',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '100026',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_welcome_sign.png',
             'text' => 'Register Welcome Sign in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28024',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '250',
             'experience' => '25',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Photographer III',
         'description' => 'Much better! This creates a real farm feeling!',
      ),
    ),
  ),
   28012 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28012',
       'title' => 'Photographer IV',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s try!',
       'description' => 'I took some more pictures of animals and machines. What else can we take pictures of? What about farming tools?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '41',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_plant_grape.png',
             'text' => 'Plant 6 Grapes',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '1004',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_shovel.png',
             'text' => 'Register a Shovel in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '250',
             'experience' => '25',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Photographer IV',
         'description' => 'Nice picture! This creates a new perspective!',
      ),
    ),
  ),
   28013 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28013',
       'title' => 'Photographer V',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Agree!',
       'description' => 'This photo shooting day has made me a bit tired. An apple juice would be really refreshing right now!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '49',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest 2 Apples',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '200465',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_juice_machine_under.png',
             'text' => 'Register a Juice Machine in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28015',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '250',
             'experience' => '25',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Photographer V',
         'description' => 'I feel ready again! Let\'s find some more other nice things to photograph.',
      ),
    ),
  ),
   28014 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28014',
       'title' => 'Photographer VI',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s see',
       'description' => 'Hey! Look at that Cropinator! Do you think we can take a good picture with it as well?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '100234',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_cropinator.png',
             'text' => 'Register Cropinator in the Gallery',
             'show_me' => '34',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'harvest_plants,plant_seeds',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'gas',
             'ignore_filter' => '1',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_cropinator.png',
             'text' => 'Use the Cropinator 1 time',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28015',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '250',
             'experience' => '25',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Photographer VI',
         'description' => 'Best picture ever! This tops Darryls work by far! Thanks for the help!',
      ),
    ),
  ),
   28015 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28015',
       'title' => 'Amusement Park I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s do it!',
       'description' => 'The Amusement Park is having its inauguration today! Me and Felicia have been waiting for this event for so long!!! Grandma said we can only go if we help her out with some tasks.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '46',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_honey.png',
             'text' => 'Collect 5 jars of Honey',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '600000',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_kitchen.png',
             'text' => 'Register the Kitchen in the Gallery',
             'show_me' => '34',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_points',
             'total' => '45',
             'spend_rp' => '45',
             'icon_url' => 'images/task/st_gallery_points.png',
             'text' => 'Have 45 Gallery Points',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28017',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '380',
             'experience' => '45',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Amusement Park I',
         'description' => 'Not bad!',
      ),
    ),
  ),
   28017 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28017',
       'title' => 'Amusement Park II',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Poor Buffalo!',
       'description' => 'Now that I think of it, I feel so bad that my buddy Buffalo can\'t come with us. Let\'s feed him and cheer him up a bit.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'feed_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '200352',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_feed_buffalo.png',
             'text' => 'Feed Buffalo 3 times with Cucumbers',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'feed_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '5',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_holsteincow_animals.png',
             'text' => 'Feed the Holstein Cow 3 times',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_set',
             'total' => '1',
             'filter' => '4',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_famooly_set.png',
             'text' => 'Complete the Fa-moo-ly Set in the Gallery',
             'show_me' => '32',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28018',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '264',
             'experience' => '38',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Amusement Park II',
         'description' => 'Good! Now I think both Buffalo and the Cow are happy!',
      ),
    ),
  ),
   28018 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28018',
       'title' => 'Amusement Park III',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Smart!',
       'description' => 'Well, actually I feel bad for the sweet Sheep too. Let\'s feed her so she\'ll be eating and won\'t notice anything.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'feed_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '36',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_feed_sheep.png',
             'text' => 'Feed a Sheep 5 times',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '200707',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_burger_machine.png',
             'text' => 'Register a Burger Machine in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28019',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '264',
             'experience' => '38',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Amusement Park III',
         'description' => 'Well done! The sheep seems occupied now!',
      ),
    ),
  ),
   28019 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28019',
       'title' => 'Amusement Park IV',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Yes!',
       'description' => 'There\'s so much candy at the Amusement Park. Grandma suggested to bring some fruit in case we want something refreshing. What do you think about some oranges?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '58',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_orange.png',
             'text' => 'Harvest 2 Oranges',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '30101',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_gisla_cherry_tree.png',
             'text' => 'Register a Gisela Cherry Tree in the Gallery',
             'show_me' => '34',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '8',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_sauce_machine.png',
             'text' => 'Register a Sauce Machine in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28020',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '264',
             'experience' => '38',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Amusement Park IV',
         'description' => 'These oranges will hit the spot!',
      ),
    ),
  ),
   28020 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28020',
       'title' => 'Amusement Park V',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Right!',
       'description' => 'Oh right! Almost forgot that the ducks need to be fed as well. Hope they\'re not starving already!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '200422',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_oat.png',
             'text' => 'Plant 10 Oat',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '40003',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_green_duck.png',
             'text' => 'Register a Green Duck Pond in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28021',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '264',
             'experience' => '38',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Amusement Park V',
         'description' => 'Quack, quack. The ducks look happy.',
      ),
    ),
  ),
   28021 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28021',
       'title' => 'Amusement Park VI',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Good idea!',
       'description' => 'Almost done. It is so warm now, I think I need some fruit before finishing the tasks. I think Love Fruits are perfect for regaining some energy!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '9411',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_love_fruit.png',
             'text' => 'Plant 5 Love Fruit',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '6001',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_peacock.png',
             'text' => 'Register a Peacock in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28022',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '264',
             'items' => '7:1',
             'experience' => '38',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Amusement Park VI',
         'description' => 'Yummy! These were really good. Even the Peacock wanted to steal some Love Fruits from me.',
      ),
    ),
  ),
   28022 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28022',
       'title' => 'Amusement Park VII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s go!',
       'description' => 'Last task!!! Amusement Park here we come!!!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fertilize,use_gift',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '7',
             'icon_url' => 'images/task/st_rain.png',
             'text' => 'Use the Rain from the giftbox',
             'gogiftbox' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '109',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_sundial.png',
             'text' => 'Register Sundial in the Gallery',
             'show_me' => '34',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_points',
             'total' => '75',
             'spend_rp' => '75',
             'icon_url' => 'images/task/st_gallery_points.png',
             'text' => 'Have 75 Gallery Points',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '395',
             'experience' => '55',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Amusement Park VII',
         'description' => 'Yeah!!! This will be so fun! And lets take enough pictures to present later to Grandma!',
      ),
    ),
  ),
   28023 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28023',
       'title' => 'Into the Woods III',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'We can not!',
       'description' => 'A Gallery without tree picture is boring. We should add one more! I know the perfect subject: How can we have a beautiful farm without trees to decorate with?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '4',
             'icon_url' => 'images/task/st_plant_clover.png',
             'text' => 'Plant 3 Clovers',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '200533',
             'spend_rp' => '1',
             'location' => '2,37',
             'icon_url' => 'images/task/st_mapple_tree.png',
             'text' => 'Register a Maple Tree in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '54',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods III',
         'description' => 'Now this looks more like a farm!',
      ),
    ),
  ),
   28024 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28024',
       'title' => 'Photographer IV',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s try!',
       'description' => 'I took some more pictures of animals and machines. What else can we take pictures of? What about a new tree?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '41',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_plant_grape.png',
             'text' => 'Plant 6 Grapes',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '57',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_orange_tree.png',
             'text' => 'Register an Orange tree in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '250',
             'experience' => '25',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Photographer IV',
         'description' => 'Nice picture! This creates a new perspective!',
      ),
    ),
  ),
   28025 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28025',
       'title' => 'Photographer III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Right',
       'description' => 'I can not find a good angle for a nice photo shoot. Don\'t you think this landscape is a bit empty? How about we add some items and spruce it up?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '4',
             'icon_url' => 'images/task/st_clover_product.png',
             'text' => 'Plant __total Clovers',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '4',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_clover_product.png',
             'text' => 'Register Clover in the Gallery',
             'show_me' => '34',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '100026',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_welcome_sign.png',
             'text' => 'Register \'Welcome\' Sign in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28024',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '250',
             'experience' => '25',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Photographer III',
         'description' => 'Much better! This creates a real farm feeling!',
      ),
    ),
  ),
   28026 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '28026',
       'title' => 'Into the Woods VIII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Yummy!',
       'description' => 'Now that the Wheat Flour is ready, we need a Baker to bake some bread.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '3',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_wheat.png',
             'text' => 'Plant __total Wheat',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '70',
             'spend_rp' => '1',
             'icon_url' => 'images/task/st_baker.png',
             'text' => 'Register a Baker in the Gallery',
             'show_me' => '34',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods VIII',
         'description' => 'Now I am full and the Gallery also looks really nice! What a successful day!',
      ),
    ),
  ),
   29001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '29001',
       'title' => 'Into the Woods I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Cool! Let\'s go!',
       'description' => 'Howdy Farmer! I found something amazing in the woods. It\'s a Gallery, an ancient place where you can present your farm successes and record all the farm activities. And If you don\'t believe me, come and see yourself!',
       'opengraph_des' => 'opengraph',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'category' => 'collect',
             'type' => 'gallery_register',
             'total' => '1',
             'filter' => '5',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_holsteincow_animals.png',
             'text' => 'Register the Holstein Cow in the Gallery',
             'show_me' => '34',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'feed_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '5',
             'icon_url' => 'images/task/st_holsteincow_animals.png',
             'text' => 'Feed the Holstein Cow 3 times',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '28002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '125',
             'experience' => '45',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Into the Woods I',
         'description' => 'You were right! This gallery is really amazing!',
      ),
    ),
  ),
   31001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '31001',
       'title' => 'I Smell a New Feature! I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Cool',
       'description' => 'I\'m so excited. Dad just told me that if I help him with some tasks, he\'ll show me a new feature for the Seaside Farm.',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '49',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest 6 Apples',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '17',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_milk.png',
             'text' => 'Collect 15 bottles of Milk',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '63',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_apple_jam.png',
             'text' => 'Produce 12 jars of Apple Jam',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '31002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'I Smell a New Feature! I',
         'description' => 'I wonder what we\'ll be able to do on the farm!',
      ),
    ),
  ),
   31002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '31002',
       'title' => 'I Smell a New Feature! II',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'What will it be?',
       'description' => 'Dad said this isn\'t enough yet! For the new function, he said we need some more nice smelling things. I\'m getting curious!',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '200534',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_mapple_syrup.png',
             'text' => 'Harvest 4 Maple Syrup',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '60',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_cherry.png',
             'text' => 'Harvest 6 Cherries',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '44',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_wine.png',
             'text' => 'Produce 16 bottles of Wine',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '31003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '390',
             'experience' => '55',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'I Smell a New Feature! II',
         'description' => 'I think this should be enough, or will it? We harvested a great mix of items.',
      ),
    ),
  ),
   31003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '31003',
       'title' => 'I Smell a New Feature!III',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s do it!',
       'description' => 'Dad said it\'s nearly finished! We just need a few more items to complete the whole experience!',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '200467',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_apple_juice.png',
             'text' => 'Produce 12 glasses of Apple Juice',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600266',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_maple_milk_tea.png',
             'text' => 'Prepare 8 cups of Maple Milk Tea',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '30072',
             'spend_rp' => '25',
             'icon_url' => 'images/task/st_lavender.png',
             'text' => 'Plant 25 Lavender',
             'shopping' => '1',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '31004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'I Smell a New Feature!III',
         'description' => 'We did it! Congratulations, the new feature is unlocked!',
      ),
    ),
  ),
   31004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '31004',
       'title' => 'I Smell a New Feature! IV',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s try it!',
       'description' => 'Wow, this function is amazing, the smell is so fragrant. I\'m sure if you tap on it you\'ll be able to smell it too!',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '4',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Plant 20 Clover to try the new feature!',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '15',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Tap on one matured Clover Crop to smell it!',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '30073',
             'icon_url' => 'images/task/st_lavender.png',
             'text' => 'Tap on the matured Lavender Crop to smell it!',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'items' => '590167:1',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'I Smell a New Feature! IV',
         'description' => 'April Fool\'s! Hope your phone didn\'t smell too bad. As a compensation I have a cute decoration for you!',
      ),
    ),
  ),
   32001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '32001',
       'title' => 'Trading Places I',
       'scene' => 2,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Aww!',
       'description' => 'I made a bet with Felicia on whose tasks are harder. Now I have to do all Felicia\'s tasks for a day and she\'ll do mine! And guess what? I\'ll be working in the flower garden all day! No way, it\'s so girly!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'ownedPots',
             'category' => 'collect',
             'type' => 'garden_map',
             'total' => '2',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_flower.png',
             'text' => 'Have __total flowers',
             'show_me' => '35',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'gardenTakeCare',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '1801',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_tools_1801.png',
             'text' => 'Help __total flowers with the Spade',
             'show_me' => '35',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'gardenTakeCare',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '1802',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_tools_1802.png',
             'text' => 'Help __total flowers with the Trimmer',
             'show_me' => '35',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '32002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1500',
             'experience' => '250',
             'develop_points' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Trading Places I',
         'description' => 'That wasn\'t too hard! Especially with your help! I wonder how Felicia has been getting on with my work!',
      ),
    ),
  ),
   32002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '32002',
       'title' => 'Trading Places II',
       'scene' => 2,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'Oh dear! Felicia left me instructions and according to them I have to crossbreed flowers. I have no idea on how to do this! Can you help me, so that Felicia won\'t laugh at me?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'ownedPots',
             'category' => 'collect',
             'type' => 'garden_map',
             'total' => '2',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:1,pot_grade:1,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_matured_lv1_flower.png',
             'text' => 'Have __total matured level 1 flowers',
             'show_me' => '35',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'flowerpotCross',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:1,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_cb_lv1.png',
             'text' => 'Crossbreed __total level 1 flowers',
             'show_me' => '35',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '32003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1500',
             'experience' => '250',
             'develop_points' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Trading Places II',
         'description' => 'Wow! Did you see that? Look, we\'ve got a special flower!',
      ),
    ),
  ),
   32003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '32003',
       'title' => 'Trading Places III',
       'scene' => 2,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Nice!',
       'description' => 'Ok! I think I can even win the bet, you know! All we need to do is take care of these little flowers when they need something! Look, I\'ll show you!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'ownedPots',
             'category' => 'collect',
             'type' => 'garden_map',
             'total' => '2',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:2,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_lv2_flower.png',
             'text' => 'Have __total level 2 flowers',
             'show_me' => '35',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'gardenTakeCare',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '1803',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_tools_1803.png',
             'text' => 'Help __total flowers with the Insecticide',
             'show_me' => '35',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'gardenTakeCare',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '1804',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_tools_1804.png',
             'text' => 'Help __total flowers with the UV Light',
             'show_me' => '35',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '32004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1500',
             'experience' => '250',
             'develop_points' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Trading Places III',
         'description' => 'These garden flowers are so delicate. I was scared about hurting them when I used the garden tools!',
      ),
    ),
  ),
   32004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '32004',
       'title' => 'Trading Places IV',
       'scene' => 2,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'No problem!',
       'description' => 'Remember the flower which you helped me crossbreed for the first time? We need to find another flower to crossbreed with this one! I still need to learn how to do this. Please help me one more time!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'ownedPots',
             'category' => 'collect',
             'type' => 'garden_map',
             'total' => '2',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:2,pot_grade:1,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_matured_lv2_flower.png',
             'text' => 'Have __total matured level 2 flowers',
             'show_me' => '35',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'flowerpotCross',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:2,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_cb_lv2.png',
             'text' => 'Crossbreed __total level 2 flowers',
             'show_me' => '35',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '32005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1500',
             'experience' => '250',
             'develop_points' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Trading Places IV',
         'description' => 'Yes, now we have one more resident for our garden! Grow, little guy! Become big and beautiful!',
      ),
    ),
  ),
   32005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '32005',
       'title' => 'Trading Places V',
       'scene' => 2,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Good luck!',
       'description' => 'I was planning to run to the fishing pier with my friends for a few hours, but these flowers need constant attention! I give Felicia credit, this job isn\'t as easy as I thought it would be. But I still want to win the bet!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'ownedPots',
             'category' => 'collect',
             'type' => 'garden_map',
             'total' => '2',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:3,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_lv3_flower.png',
             'text' => 'Have __total level 3 flowers',
             'show_me' => '35',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'gardenTakeCare',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '1805',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_tools_1805.png',
             'text' => 'Help __total flowers with Music',
             'show_me' => '35',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '32006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1500',
             'experience' => '250',
             'develop_points' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Trading Places V',
         'description' => 'Nice! All flowers have had their fair share of my attention! Now I have some free time!',
      ),
    ),
  ),
   32006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '32006',
       'title' => 'Trading Places VI',
       'scene' => 2,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'I\'ll help!',
       'description' => 'We have enough flowers in our garden! Time for some experiments! I will crossbreed flowers and try to get a totally new type of flower! Felicia will be stunned!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'ownedPots',
             'category' => 'collect',
             'type' => 'garden_map',
             'total' => '2',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:3,pot_grade:1,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_matured_lv3_flower.png',
             'text' => 'Have __total matured level 3 flowers',
             'show_me' => '35',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'flowerpotCross',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:3,pot_grade:all,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_cb_lv3.png',
             'text' => 'Crossbreed __total level 3 flowers',
             'show_me' => '35',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '32007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1500',
             'experience' => '250',
             'develop_points' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Trading Places VI',
         'description' => 'It\'s so peaceful here in this garden! No wonder Felicia spends hours here!',
      ),
    ),
  ),
   32007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '32007',
       'title' => 'Trading Places VII',
       'scene' => 2,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Ok!',
       'description' => 'I need to free up some space in the garden. Can you help me decide which one I should sell? I am so attached to them now that I won\'t be able to make a choice!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'sellFlowerpot',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:all,pot_grade:1,neighbor_pot:all',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_sell_matured_flower.png',
             'text' => 'Sell __total matured flowers',
             'show_me' => '35',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1500',
             'experience' => '250',
             'develop_points' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Trading Places VII',
         'description' => 'Thank you for your help! Now we have more space and more coins! Gardening sure is an awesome thing!',
      ),
    ),
  ),
   32008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '32008',
       'title' => 'Trading Places VIII',
       'scene' => 2,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Of course!',
       'description' => 'With all my gardening experiments, I\'m now out of space in the garden again! Do you think some neighbors would like to help us take care of our flowers?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'flowerpotNeighbourSet',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:1',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_place_neighbor_pot.png',
             'text' => 'Place __total Friendship Flowers on a neighbor\'s Glasshouse plot',
             'show_me' => '35',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'gardenTakeCare',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:1',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_help_neighbor_pot.png',
             'text' => 'Help __total Friendship Flowers',
             'show_me' => '35',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'flowerpotCross',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'all',
             'properties' => 'flower_id:all,stage:all,pot_grade:all,neighbor_pot:1',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gd_cb_neighbor.png',
             'text' => 'Crossbreed __total Friendship Flowers',
             'show_me' => '35',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1500',
             'experience' => '250',
             'develop_points' => '15',
             'will_share' => 'FALSE',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Trading Places VIII',
         'description' => 'I think Felicia won this time, but I don\'t mind. I hope she\'ll let me help her with the garden more often!',
      ),
    ),
  ),
   180321 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '180321',
       'title' => 'My new House!',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'We are such good friends, you must miss me a lot when I\'m at my own farm, right? Never fear, I decided to stay near here and keep you company! But I want to build a house to live in, can you help me?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'darryl_map',
             'total' => '2',
             'filter' => '750001',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_brown_wooden_chair.png',
             'text' => 'Place a Brown Wooden Chair in Darryl\'s House',
             'show_me' => '10008',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'darryl_map',
             'total' => '1',
             'filter' => '750020',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_round_wooden_table.png',
             'text' => 'Place __total Round Wooden Tables in Darryl\'s House',
             'show_me' => '10008',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'room_point',
             'total' => '10',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_room_point.png',
             'text' => 'Reach __total House Points',
             'show_me' => '10009',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '180322',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'My new House!',
         'description' => 'Now we can add more space to the House! Let\'s make it bigger!',
      ),
    ),
  ),
   180322 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '180322',
       'title' => 'My new House!',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Nice!',
       'description' => 'I feel like the House is missing something... I think we need a kitchen! I\'ve always wanted to learn to cook as well as Felicia! Her pancakes are to die for!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '600393',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_roasted_tomato_soup.png',
             'text' => 'Prepare __total bowls of Roasted Tomato Soup',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'darryl_map',
             'total' => '1',
             'filter' => '750037',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_stove_furniture.png',
             'text' => 'Place __total Stove in Darryl\'s House',
             'show_me' => '10008',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'room_point',
             'total' => '20',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_room_point.png',
             'text' => 'Reach __total House Points',
             'show_me' => '10009',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'items' => '750013:1',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'My new House!',
         'description' => 'Great! We can add another area now! Try to open the whole House - there\'s no such thing as too much living space, after all!',
      ),
    ),
  ),
   200001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200001',
       'title' => 'Felicia\'s Secret I',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Unlock the Kitchen first!',
       'description' => 'Darryl is always making fun of me that I cannot cook...Well, I\'ve followed some cooking courses lately, and I am gonna give Grandma and Darryl a big surprise. But I will need to have a Kitchen!',
       'opengraph_des' => '%s has just found out a secret, can you guess what it is? Play family farm seaside to find out.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'building_area_exist',
             'total' => '1',
             'filter' => '1',
             'icon_url' => 'images/task/st_soil.png',
             'text' => 'Unlock the first plot in the Building Area',
             'show_me' => '104',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '46',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_honey.png',
             'text' => 'Collect __total jars of Honey',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'todo_add',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => 'all',
             'ignore_filter' => 1,
             'icon_url' => 'images/task/st_todolist.png',
             'text' => 'Add __total tasks to the To-do List',
             'show_me' => '451',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '405',
             'experience' => '58',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Secret I',
         'description' => 'Great we have a kitchen! Now let\'s prepare dinner! I\'m sure they will love it!',
      ),
    ),
  ),
   200002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200002',
       'title' => 'Felicia\'s Secret II',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s Get Some Honey!',
       'description' => 'Gorgonzola Baked Apples would be good to make, what do you think? Let\'s see, first we make the Honey Sauce! We need to get some Honey Dippers to keep my hands clean when gathering the honey.',
       'opengraph_des' => '%s didn\'t want to get into a sticky situation, find out what they needed to carry on cooking by playing Family Farm Seaside. You can even help them out.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '600002',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_honey_syrup.png',
             'text' => 'Prepare __total jars of Honey Syrup',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'accept_gift',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600046',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_honey_dipper.png',
             'text' => 'Collect __total Honey Dippers from neighbors',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '405',
             'experience' => '58',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Secret II',
         'description' => 'Phew, that was not too difficult! I was afraid It would turn out in a disaster just like during the cooking course...',
      ),
    ),
  ),
   200003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200003',
       'title' => 'Felicia\'s Secret III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Make Some Cheese Apples!',
       'description' => 'Alright, now what do we need? Cheese apples right? So I need to pick some Apples and make some Buffalo Cheese.',
       'opengraph_des' => 'Do cheese and apples go together like %s and Family Farm Seaside?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '49',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest __total Apples',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '30131',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_buffalo_milk_cheese.png',
             'text' => 'Produce __total Buffalo Milk Cheese',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '600003',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_apple_cheese.png',
             'text' => 'Prepare __total Cheese Apples',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '405',
             'experience' => '58',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Secret III',
         'description' => 'Yummy! The cheese apples taste really good!!',
      ),
    ),
  ),
   200004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200004',
       'title' => 'Felicia\'s Secret IV',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Bake some Bread!',
       'description' => 'Hmm... Gorgonzola Baked Apples are nice, but we need to add something extra... I know what will go well with them, a few loaves of Wheat Bread!',
       'opengraph_des' => 'Are you hungry? %s just made some very tasty food. You can make some too; get cooking by playing Family Farm Seaside',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '3',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_wheat.png',
             'text' => 'Plant __total Wheat',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '18',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_wheat_flour.png',
             'text' => 'Produce __total sacks of Wheat Flour',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '71',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_wheat_bread.png',
             'text' => 'Produce __total loaves of Wheat Bread',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '405',
             'experience' => '58',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Secret IV',
         'description' => 'Mmm... the smell of Fresh Bread is so good!',
      ),
    ),
  ),
   200005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200005',
       'title' => 'Felicia\'s Secret V',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Finish the meal!',
       'description' => 'Whoops, we have too much ingredients... Well I think I can make a few extra Gorgonzola Baked Apples and sell them!',
       'opengraph_des' => '%s has just sold some of their fantastic dishes whilst playing Family Farm Seaside and has made some coins for their farm. What would you spend the coins on?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '600030',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gorgonzola_baked_apple.png',
             'text' => 'Prepare 3 Gorgonzola Baked Apples',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '1500',
             'filter' => 'coins',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_collect_coins.png',
             'text' => 'Make 1500 coins by selling goods from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '405',
             'experience' => '58',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Secret V',
         'description' => 'Grandma loved it! Darryl was amazed and astonished! See, I can cook!!',
      ),
    ),
  ),
   200006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200006',
       'title' => 'Begin to cook I',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Right!',
       'description' => 'Grandma told me that every young lady should be able to cook to be a good housewife. I don\'t agree with this traditional way of thinking, but it sure is useful to be able to cook!',
       'opengraph_des' => 'An apple a day keeps the doctor away! %s just picked 8, they will be great to use in the Family Farm Seaside Kitchen, try now for free.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '200533',
             'icon_url' => 'images/task/st_mapple_tree.png',
             'text' => 'Plant a Maple Tree',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '200534',
             'spend_rp' => '2',
             'icon_url' => 'images/task/st_mapple_syrup.png',
             'text' => 'Harvest __total Maple Syrup',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '49',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest __total Apples',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '405',
             'experience' => '58',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Begin to cook I',
         'description' => 'The first step is always the hardest, but you did it! Encourage your friends to start cooking.',
      ),
    ),
  ),
   200007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200007',
       'title' => 'Begin to cook II',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Maybe...',
       'description' => 'That was easy: I think I am starting to get the hang of this. I\'m sure I have a talent for cooking! Do you have an idea what to do with the apples?',
       'opengraph_des' => 'What wobbles and can\'t be trusted? %s? Jelly of course! Make some now in Family Farm Seaside',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '63',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_apple_jam.png',
             'text' => 'Produce __total jars of Apple Jam',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600033',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_apple_jelly.png',
             'text' => 'Prepare __total jars of Apple Jelly',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200008',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Begin to cook II',
         'description' => 'What a great idea! Apple Jelly is delicious. Suggest your friends try it and see what else you can make.',
      ),
    ),
  ),
   200008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200008',
       'title' => 'Begin to cook III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Alright!',
       'description' => 'Oh no, look at my clothes! They are all dirty, I forgot to wear an apron. Could you put one on, while I change? And don\'t forget the ingredients for the next dish!',
       'opengraph_des' => '%s just made a really big mess in the kitchen, find out why and help others keep tidy by playing Family Farm Seaside.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '60',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_cherry.png',
             'text' => 'Harvest __total Cherries',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '600034',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_fruit_butter.png',
             'text' => 'Prepare __total lots of Fruit Butter',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'accept_gift',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '600047',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_apron.png',
             'text' => 'Collect __total Aprons from your neighbors',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '405',
             'experience' => '58',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Begin to cook III',
         'description' => 'I think I look so cute wearing this apron! What shall I do with all the extra fruit butter? Share and find out!',
      ),
    ),
  ),
   200009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200009',
       'title' => 'Begin to cook IV',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Milk!',
       'description' => 'Now we have the jelly, jam and butter. However we are still missing the bread. Hmm, what do we need to make some bread? Eggs, Flour and?',
       'opengraph_des' => 'That was hard work, %s got all the ingredients to make some delicious bread though. See how your bread will turn out, check out Family Farm Seaside.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '200444',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_oat_flour.png',
             'text' => 'Produce 12 sacks of Oat Flour',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '21',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_egg.png',
             'text' => 'Produce 12 Eggs',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '17',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_milk.png',
             'text' => 'Produce 12 bottles of Milk',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Begin to cook IV',
         'description' => 'Milk of course! This bread will be really tasty! Tell your friends to get ready to taste some!',
      ),
    ),
  ),
   200010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200010',
       'title' => 'Begin to cook V',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'No problem!',
       'description' => 'The bread is done, it looks delicious! We made some extra so we can sell what\'s left to buy more ingredients!',
       'opengraph_des' => '%s has just made some fresh delicious bread. Are you surprised they did not burn it? Test your skills by playing Family Farm Seaside',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '200445',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_oat_bread.png',
             'text' => 'Produce __total loaves of Oat Bread',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600035',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_oat_fruit_bread.png',
             'text' => 'Produce __total Whole Oat Fruit Bread',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600035',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_oat_fruit_bread.png',
             'text' => 'Sell __total Whole Oat Fruit Breads from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200011',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Begin to cook V',
         'description' => 'What a success! Tell you friends how great it is to produce something on your own!',
      ),
    ),
  ),
   200011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200011',
       'title' => 'Who loves tasty food I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s try!',
       'description' => 'Can you smell the delicious food? It\'s a shame grandma does not allow me to use the kitchen, I am too small! I wonder if Felicia would cook something for me if I bring her the correct ingredients.',
       'opengraph_des' => 'It\'s all about the preparation, what is %s is making? See what you can make with your ingredients in the Family Farm Seaside kitchen.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '13',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_corn.png',
             'text' => 'Harvest 16 Corn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '126',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_cornmeal.png',
             'text' => 'Produce 8 Cornmeal',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200012',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Who loves tasty food I',
         'description' => 'Awesome! She agreed to help me if I tell my friends about it. Can you help me?',
      ),
    ),
  ),
   200012 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200012',
       'title' => 'Who loves tasty food II',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Honey!',
       'description' => 'Felicia said she is really good at making bread - I can\'t wait to taste it. What do you want on your bread?',
       'opengraph_des' => 'Do you like honey on fresh bread? %s just made some, are you hungry? Get baking in Family Farm Seaside now.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '65006',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Produce __total loaves Corn Bread',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600002',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_honey_syrup.png',
             'text' => 'Prepare __total Jars of Honey Syrup',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200013',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Who loves tasty food II',
         'description' => 'Yummy! Her cooking is so tasty. My friends will be jealous when they try it.',
      ),
    ),
  ),
   200013 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200013',
       'title' => 'Who loves tasty food III',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Great idea!',
       'description' => 'Bread and honey is tasty, I prefer sweeter things. It\'s better to be healthy though! What about making orange crumbles?',
       'opengraph_des' => '%s just made some orange crumbles, find out what else you can make in the Family Farm Seaside kitchen.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600037',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_batter.png',
             'text' => 'Prepare  __total lots of Batter',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '58',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_orange.png',
             'text' => 'Harvest __total Oranges',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => '600004',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_orange_crumble.png',
             'text' => 'Prepare __total Orange Crumbles',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200014',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Who loves tasty food III',
         'description' => 'Tasty and healthy! I made so much there is enough for a whole football team! What can we do with it all?',
      ),
    ),
  ),
   200014 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200014',
       'title' => 'Who loves tasty food IV',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Yes!',
       'description' => 'There are too many sweets. Never mind, we can share them with our neighbors to help them out.',
       'opengraph_des' => 'Who has a sweet tooth? Opps %s made too many desserts, good job they can be sold in the Family Farm Seaside store though. Check out what else you can sell.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'neighbors',
             'total' => '5',
             'filter' => 'neighbor',
             'spend_rp' => '9',
             'icon_url' => 'images/task/st_neighbor_visit.png',
             'text' => 'Have __total neighbors',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'friend_fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => 'friend_fertilize',
             'ignore_filter' => '1',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_fertilize_neighbor.png',
             'text' => 'Fertilize __total times  on your neighbors\' farms',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200015',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Who loves tasty food IV',
         'description' => 'Sweets are even better when you share them with and help your friends! Share and tell all your friends how great it feels!',
      ),
    ),
  ),
   200015 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200015',
       'title' => 'Who loves tasty food V',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Will do!',
       'description' => 'Now that they ate all the orange crumbles they are asking for more. Well, why not? Let\'s come up with some more sweets. Don\'t forget to save some for me!',
       'opengraph_des' => '%s is becoming a skilled pastry chef, they have made orange crumbles and no some fluffy muffins; just a few of the tasty options in Family Farm Seaside.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '600036',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cake_flour.png',
             'text' => 'Produce __total sacks of Cake Flour',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '60',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_cherry.png',
             'text' => 'Harvest __total Cherries',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '600009',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_fluffy_muffin.png',
             'text' => 'Prepare __total Light Muffins',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200016',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '600',
             'experience' => '85',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Who loves tasty food V',
         'description' => 'Wow! They nearly ate them all and look at Felicia... Looks like she is coming up with an idea. Share and find out what it can be!',
      ),
    ),
  ),
   200016 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200016',
       'title' => 'Felicia\'s Dessert Shop I',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Of course!',
       'description' => 'Don\'t tell Darryl, but now I know what I want to make! Desserts and lots of them! I can sell them as well! The best idea would be to sell the desserts in the shop. Can you help me?',
       'opengraph_des' => 'What wobbles and can\'t be trusted? %s? Jelly of course! Make some now in Family Farm Seaside',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '200534',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_mapple_syrup.png',
             'text' => 'Harvest 4 jars of Maple Syrup',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '49',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest 8 Apples',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600033',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_apple_jelly.png',
             'text' => 'Prepare 4 jars of Apple Jelly',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200017',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '600',
             'experience' => '85',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Dessert Shop I',
         'description' => 'Great. The apple jelly is just the beginning... Share and tell your friends!',
      ),
    ),
  ),
   200017 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200017',
       'title' => 'Felicia\'s Dessert Shop II',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'That\'s smart!',
       'description' => 'People love cake, but it\'s difficult to eat as a snack. Muffins are more convenient and I am sure I can make them. The ingredients are nearly the same.',
       'opengraph_des' => 'What is %s making with flour and rye, find out by using the kitchen in Family Farm Seaside',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '200423',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_oat.png',
             'text' => 'Harvest 16 Oat',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '65003',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_rye.png',
             'text' => 'Harvest 16 Rye',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600036',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_cake_flour.png',
             'text' => 'Produce 8 sacks of Cake Flour',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200018',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Dessert Shop II',
         'description' => 'That\'s all we need? Ask your friends, just to make sure...!',
      ),
    ),
  ),
   200018 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200018',
       'title' => 'Felicia\'s Dessert Shop III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Sounds like a plan!',
       'description' => 'Great, we got everything. Let\'s bake the muffins and make some brochures so we can start to advertise them in the store.',
       'opengraph_des' => '%s has just started selling a new product; do you know what it is? Maybe you could help by providing some brochures in Family Farm Seaside',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '65',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_cherry_jam.png',
             'text' => 'Produce 8 jars of Cherry Jam',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600009',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_fluffy_muffin.png',
             'text' => 'Prepare 8 Light Muffins',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'accept_gift',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600048',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_brochure.png',
             'text' => 'Collect 10 Brochures from your neighbors',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200019',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '600',
             'experience' => '85',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Dessert Shop III',
         'description' => 'Super! In case it\'s not enough, you can spread the news and tell everybody about the new shop!',
      ),
    ),
  ),
   200019 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200019',
       'title' => 'Felicia\'s Dessert Shop IV',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Why not?',
       'description' => 'I don\'t want to have an ordinary dessert shop! I have to try something new! People love cheese and apples! Why not combine them?',
       'opengraph_des' => 'Want to try something new? %s just made a new interesting dish and you can too in the Family Farm Seaside game',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '30131',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_buffalo_milk_cheese.png',
             'text' => 'Produce 16 Buffalo Milk Cheese',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600003',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_apple_cheese.png',
             'text' => 'Prepare 4 Cheese Apples',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600030',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_gorgonzola_baked_apple.png',
             'text' => 'Prepare 4 Gorgonzola Baked Apples',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200020',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '600',
             'experience' => '85',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Dessert Shop IV',
         'description' => 'So unusual. Do you think it will be an success? We should ask some friends to see what they think....',
      ),
    ),
  ),
   200020 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200020',
       'title' => 'Felicia\'s Dessert Shop V',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Oh oh!',
       'description' => 'Oh no, Darryl ate all the bread? But we need some to sell it together with some jam. Ok, stay calm, we can fix this.',
       'opengraph_des' => '%s just avoided a crisis, someone at all the bread. Test your farming and baking skills in Family Farm Seaside.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '13',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_corn.png',
             'text' => 'Harvest 20 Corn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '126',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cornmeal.png',
             'text' => 'Prepare 10 Cornmeal',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '65006',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Produce 10 loaves of Corn Bread',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200021',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Dessert Shop V',
         'description' => 'Wow, so fast! Nothing to fear, now we have enough bread!',
      ),
    ),
  ),
   200021 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200021',
       'title' => 'Felicia\'s Dessert Shop VI',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'I am so excited. Do you think they will like my dishes? Let\'s try to sell them and find out.',
       'opengraph_des' => '%s just sold their hand made desserts, think you can too? Find out by playing Family Farm Seaside.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600030',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_gorgonzola_baked_apple.png',
             'text' => 'Sell 4 Gorgonzola Baked Apples from the Barn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '9',
             'filter' => '600009',
             'spend_rp' => '18',
             'icon_url' => 'images/task/st_fluffy_muffin.png',
             'text' => 'Sell 9 Light Muffins from the Barn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '65006',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Sell 10 Cornbread from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200022',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Dessert Shop VI',
         'description' => 'Awesome! We sold everything so fast. Tell your friends about this success!',
      ),
    ),
  ),
   200022 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200022',
       'title' => 'Felicia\'s Dessert Shop VII',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'What is it?',
       'description' => 'Now I have space for new dishes! This time I want to use a lot of fruits and I already have an idea!!',
       'opengraph_des' => 'What has %s been making in the Family Farm Seaside kitchen? Perhaps it\'s something fruity, play the game to find out what dish is going to be so delicious.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600037',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_batter.png',
             'text' => 'Prepare 4 lots of Batter',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '60',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_cherry.png',
             'text' => 'Harvest 6 Cherries',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '49',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest 10 Apples',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200023',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Dessert Shop VII',
         'description' => 'Do you want to know what Felicia will make with these? Share and keep playing to find out.',
      ),
    ),
  ),
   200023 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200023',
       'title' => 'Felicia\'s Dessert Shop VIII',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Yummy!',
       'description' => 'Perfect! Have you heard of Sunrise Porridge? I bet the customers will love it and it\'s easy to make so we can try to sell it right away.',
       'opengraph_des' => 'Everyone loves porridge; %s has just made some sunrise porridge. Want to make some too? Check out Family Farm Seaside.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '126',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cornmeal.png',
             'text' => 'Prepare 4 Cornmeal',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600018',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_sunrise_porridge.png',
             'text' => 'Prepare 4 lots of Sunrise Porridge',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600018',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_sunrise_porridge.png',
             'text' => 'Sell 4 lots Sunrise Porridge from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200024',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '450',
             'experience' => '64',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Felicia\'s Dessert Shop VIII',
         'description' => 'The dessert shop was a great idea! Can\'t wait for more things to cook...',
      ),
    ),
  ),
   200024 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200024',
       'title' => 'Darryl cookbook I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s Prepare!',
       'description' => 'Grandma is not at home! Help, I need to cook for myself, I know you will help me? Cornbread Meatloaf would be good dish to start with.',
       'opengraph_des' => '%s has just managed to cook some lovely meatloaf. Find out what other great dishes you can make in the Family Farm Seaside kitchen, start playing now.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '14',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_tomato.png',
             'text' => 'Harvest 20 Tomatos',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '19',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_ketchup.png',
             'text' => 'Produce 20 Jars of Ketchup',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200025',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl cookbook I',
         'description' => 'Great, the sauce is ready!',
      ),
    ),
  ),
   200025 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200025',
       'title' => 'Darryl cookbook II',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Find some good beef!',
       'description' => 'Now comes the hard part: where can I find good Beef? Of course, our Limousin Cattle.',
       'opengraph_des' => '%s just managed to find some really good quality beef, find out how and use it in some great dishes by playing Family Farm Seaside.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '20029',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_pasture.png',
             'text' => 'Harvest 20 Pasture',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '20115',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_beef.png',
             'text' => 'Produce 20 Beef',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200026',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl cookbook II',
         'description' => 'Now we have some top quality Beef! Let\'s make something nice with it!',
      ),
    ),
  ),
   200026 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200026',
       'title' => 'Darryl cookbook III',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Appetizer, here I come!',
       'description' => 'Alright, let\'s see what is the next step? First I need to produce some Grilled Flank Steaks, then some Cheese Burgers and finally I can make a few Cornbread Meatloafs with it. I\'m excited.',
       'opengraph_des' => '%s has been busy in the kitchen, what has he made? Smells a bit like steak - find out what steak can be made by playing Family Farm Seaside now.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600005',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_grilled_asian_flank_steak.png',
             'text' => 'Prepare 5 Grilled Flank Steaks',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '500001',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_cheese_burger.png',
             'text' => 'Produce 5 Cheese Burgers',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600019',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cornbread_meatloaf.png',
             'text' => 'Produce 5 Cornbread Meatloafs',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200027',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '660',
             'experience' => '94',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl cookbook III',
         'description' => 'Ooo, this smells really good!!',
      ),
    ),
  ),
   200027 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200027',
       'title' => 'Darryl cookbook IV',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Main Dish!',
       'description' => 'The Cornbread Meatloaf was delicious, but I\'m still hungry! Let\'s make a Whole Oat Fruit Bread! We need to have Apple Jelly and Fruit Butter, right?',
       'opengraph_des' => '%s just got some apples and cherries, but what for? Find out what you can make with these by playing Family Farm Seaside now.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '200534',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_mapple_syrup.png',
             'text' => 'Harvest 6 Jars of Maple Syrup',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '60',
             'spend_rp' => '3',
             'icon_url' => 'images/task/st_cherry.png',
             'text' => 'Harvest 6 Cherries',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '49',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_apple.png',
             'text' => 'Harvest 10 Apples',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200028',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl cookbook IV',
         'description' => 'Great! We now have everything to finish the meal!',
      ),
    ),
  ),
   200028 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200028',
       'title' => 'Darryl cookbook V',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Great idea!',
       'description' => 'Cooking is so much fun! I really like toast with fruit butter. Why don\'t we make some fruit butter by ourselves?',
       'opengraph_des' => '%s has just made some fruit butter to put on his toast. Find out what you can make by checking out the Kitchen in Family Farm Seaside now',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '600034',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_fruit_butter.png',
             'text' => 'Prepare 4 lots of Fruit Butter',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '44',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_wine.png',
             'text' => 'Produce 16 bottles of Wine',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200029',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl cookbook V',
         'description' => 'Yummy! Homemade fruit butter tastes much better than the fruit butter they sell in supermarkets!',
      ),
    ),
  ),
   200029 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200029',
       'title' => 'Darryl cookbook VI',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Get the Ingredients!',
       'description' => 'Oh well, I can always have some milk. But first let\'s get the ingredients for the Whole Oat Fruit Bread. I still miss Oat Bread.',
       'opengraph_des' => 'Milk, eggs and flour, what has %s making in the Family Farm Seaside kitchen? Play and find out for yourself, it\'s got to be tasty.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '200444',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_oat_flour.png',
             'text' => 'Produce 16 sacks of Oat Flour',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '21',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_egg.png',
             'text' => 'Produce 16 Eggs',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '17',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_milk.png',
             'text' => 'Produce 16 bottles of Milk',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200030',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl cookbook VI',
         'description' => 'Alright, I have everything!',
      ),
    ),
  ),
   200030 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200030',
       'title' => 'Darryl cookbook VII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Dinner Time!',
       'description' => 'I am starving! Let\'s quickly make the Oat Bread, so we can produce Whole Oat Fruit Bread!',
       'opengraph_des' => '%s just made some oat fruit bread and it actually tastes good. See if you can make even more tasty dishes by playing Family Farm Seaside now.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '16',
             'filter' => '200445',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_oat_bread.png',
             'text' => 'Produce 16 loaves of Oat Bread',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600035',
             'spend_rp' => '16',
             'icon_url' => 'images/task/st_oat_fruit_bread.png',
             'text' => 'Produce 8 loaves of Whole Oat Fruit Bread',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200031',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl cookbook VII',
         'description' => 'It smells so good!!',
      ),
    ),
  ),
   200031 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200031',
       'title' => 'Darryl cookbook VIII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Sell the food!',
       'description' => 'What?! Grandma left food in the refrigerator? So I actually didn\'t need to cook!! Shall I eat my own dish, or Grandma\'s one? You know what: I will sell mine! Nothing beats my Grandmas cooking.',
       'opengraph_des' => 'Don\'t you think nothing beats your family\'s cooking? %s just sold the food he made in the Family Farm Seaside store as the food made if Family Farm Seaside is always delicious.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600035',
             'spend_rp' => '16',
             'icon_url' => 'images/task/st_oat_fruit_bread.png',
             'text' => 'Sell 8 Whole Oat Fruit Breads from the Barn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '200468',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_orange_juice.png',
             'text' => 'Sell 8 glasses of Orange Juice from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200032',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl cookbook VIII',
         'description' => 'Grandma \'s dish is really tasty! I still need to practice and have lots to learn to beat it!',
      ),
    ),
  ),
   200032 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200032',
       'title' => 'Darryl\'s Cake Stall I',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Sure!',
       'description' => 'Did you see Darryl\'s stall outside? He is trying to sell some homemade stuff. I\'m really curious what he made, can you go and take a look for me as I am busy with some cake preparations I promised I would do for Grandma.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '200444',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_oat_flour.png',
             'text' => 'Produce 30 sacks of Oat Flour',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '65004',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_rye_flour.png',
             'text' => 'Produce 30 sacks of Rye Flour',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '600036',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_cake_flour.png',
             'text' => 'Prepare 15 Cake Flour',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200033',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '660',
             'experience' => '94',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s Cake Stall I',
         'description' => 'Darryl has done what? He destroyed Grandma\'s favourite vase? No wonder she is so upset, but what has that got to do with this stall?',
      ),
    ),
  ),
   200033 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200033',
       'title' => 'Darryl\'s Cake Stall II',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Great idea!',
       'description' => 'Ahh I see, he thinks he can get enough money to buy Grandma a new vase to replace the broken one and cheer her up. Come on, let\'s work together and make some food for him to sell!',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '18',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_wheat_flour.png',
             'text' => 'Produce 30 Wheat Flour',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '21',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_egg.png',
             'text' => 'Produce 30 Eggs',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '600037',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_batter.png',
             'text' => 'Prepare 15 Batter',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200034',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '660',
             'experience' => '94',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s Cake Stall II',
         'description' => 'Great, that should be enough batter to help Darryl and fulfil the promise I made to grandma about the cakes.',
      ),
    ),
  ),
   200034 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200034',
       'title' => 'Darryl\'s Cake Stall III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Tasty!',
       'description' => 'Let\'s bake something for Grandma first. Hmm, what do you think about cherry flan?',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '30102',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_gisla_cherry.png',
             'text' => 'Harvest 8 Gisela Cherries',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600040',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_soft_dough.png',
             'text' => 'Prepare 10 Soft Dough',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600041',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cherry_flan.png',
             'text' => 'Prepare 10 Cherry Flan',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200035',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s Cake Stall III',
         'description' => 'I can\'t get enough of the smell from the fresh cherry flan I just made, Grandma will love it! Now let\'s help Darryl out for his stall.',
      ),
    ),
  ),
   200035 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200035',
       'title' => 'Darryl\'s Cake Stall IV',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Good idea',
       'description' => 'If Darryl wants to sell something else in his stall it has to be easy to eat. Muffins will do the trick.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '65',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_cherry_jam.png',
             'text' => 'Produce 10 Cherry Jam',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600009',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_light_muffin.png',
             'text' => 'Prepare 5 Light Muffins',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200036',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '495',
             'experience' => '70',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s Cake Stall IV',
         'description' => 'Voilà! Siblings don\'t have to fight. Now we need to bake one more cake and then help him sell it!',
      ),
    ),
  ),
   200036 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200036',
       'title' => 'Darryl\'s Cake Stall V',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Well... Sure!',
       'description' => 'I have never tried to make any Lychee Scones. Darryl\'s situation a good time to try it, I hope they sell otherwise he won\'t reach his target. Let\'s do it, it\'s always good to be positive!',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '55006',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_lychee.png',
             'text' => 'Harvest 8 lychee',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600042',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lychee_scone.png',
             'text' => 'Prepare 10 Lychee Scones',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200037',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s Cake Stall V',
         'description' => 'Finished! Now we can surprise Darryl with this sweet favour and help him to make Grandma smile!',
      ),
    ),
  ),
   200037 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200037',
       'title' => 'Darryl\'s Cake Stall VI',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Start selling',
       'description' => 'Darryl is so happy! If Grandma could see how much it means to him, I am sure would forgive him straight away. She\'s not here, that\'s good though as we now have enough to sell and get a replacement vase!',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600042',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lychee_scone.png',
             'text' => 'Sell 10 Lychee Scones from the Barn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600009',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_light_muffin.png',
             'text' => 'Sell 5 Light Muffins from the Barn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '15000',
             'filter' => 'coins',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_coin.png',
             'text' => 'Sell 15000 coins worth of goods from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200038',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s Cake Stall VI',
         'description' => 'Made it! By working together we sold enough to replace Grandmas favourite vase, I knew people would like my Lychee Scones. Thank you!',
      ),
    ),
  ),
   200038 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200038',
       'title' => 'Picnic Time I',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Sounds nice!',
       'description' => 'The weather has been wonderful the last few days. It\'s a shame we haven\'t had the time to fully enjoy it. I know what we can do; we can organize a picnic to enjoy it. Let\'s start with the preparations.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '6004',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_rice.png',
             'text' => 'Harvest 30 Rice',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '200423',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_oat.png',
             'text' => 'Harvest 30 Oat',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200039',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '432',
             'experience' => '61',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Picnic Time I',
         'description' => 'That was hard work and it was only the preparations. Let\'s keep going and continue with the rest of the tasks.',
      ),
    ),
  ),
   200039 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200039',
       'title' => 'Picnic Time II',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Good idea!',
       'description' => 'Rice Krispies are delicious snacks for a picnic and I know Darryl loves them. Since we have already got the Rice and Oat, we can easily make some Rice Krispies now.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '40009',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_duck_egg.png',
             'text' => 'Produce 30 Duck Eggs',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '200437',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_mayonnaise.png',
             'text' => 'Produce 30 Mayonnaise',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '600039',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_rice_krispies.png',
             'text' => 'Prepare 15 Rice Krispies',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200040',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Picnic Time II',
         'description' => 'The Rice Krispies are cooked and they all look really tasty! I\'m really tempted to eat one but we still have lots to do.',
      ),
    ),
  ),
   200040 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200040',
       'title' => 'Picnic Time III',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Sounds delicious!',
       'description' => 'Bread is good idea for a picnic. I prefer to have something sweet on my bread and the blueberries look sweet and tasty this year. So why don\'t we make some Blueberry Jam?',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '84',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_blueberry.png',
             'text' => 'Harvest 30 Blueberries',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '89',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_blueberry_jam.png',
             'text' => 'Produce 30 Blueberry Jam',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200041',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Picnic Time III',
         'description' => 'I gave into temptation, I couldn\'t help myself and tried some of the Blueberry Jam, It\'s really delicious!',
      ),
    ),
  ),
   200041 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200041',
       'title' => 'Picnic Time IV',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'No problem!',
       'description' => 'I know a really beautiful and big park where we can have the picnic. I\'m sure the kids will want to run around and play some games. We better prepare some snacks for them.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '4',
             'filter' => '9410',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_chocolate.png',
             'text' => 'Harvest 4 Chocolates',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600020',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_chocolate_dream_bar.png',
             'text' => 'Prepare 8 Chocolate Dream Bars',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200042',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Picnic Time IV',
         'description' => 'This should be enough food, now let\'s think about the drinks.',
      ),
    ),
  ),
   200042 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200042',
       'title' => 'Picnic Time V',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Good idea!',
       'description' => 'I haven\'t seen my friends for such a long time and this is a great opportunity to catch up with them. I can\'t wait, we better prepare some wine.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '44',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_wine.png',
             'text' => 'Produce 30 bottles of Wine',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '200459',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_champagne.png',
             'text' => 'Produce 30 bottles of Champagne',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200043',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Picnic Time V',
         'description' => 'We have the food and now we also have some drinks to compliment the food. I think we are all set for a lovely picnic. Exciting!',
      ),
    ),
  ),
   200043 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200043',
       'title' => 'Picnic Time VI',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Too bad..',
       'description' => 'Oh no, the weather forecast predicts rain for the next few days. I think we may have to cancel the picnic this time and rearrange. What a shame, at least we can sell the products we made!',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '44',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_wine.png',
             'text' => 'Sell 30 bottles of Wine from the Barn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '200459',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_champagne.png',
             'text' => 'Sell 30 bottles of Champagne from the Barn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600020',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_chocolate_dream_bar.png',
             'text' => 'Sell 8 Chocolate Dream Bars from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200044',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Picnic Time VI',
         'description' => 'Typical weather! At least its good for the crops. We didn\'t have the picnic this time, but we can have it in the future!',
      ),
    ),
  ),
   200044 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200044',
       'title' => 'Secret Pétanque I',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Ok, I won\'t tell',
       'description' => 'Shh be quiet, my buddies and I are planning to have a secret pétanque game tonight. We need some man snacks, maybe a "manwich"?',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '20115',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_beef.png',
             'text' => 'Produce 40 Beef',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '30095',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_beef_salami.png',
             'text' => 'Produce 40 Beef Salami',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '60',
             'filter' => '200437',
             'spend_rp' => '30',
             'icon_url' => 'images/task/st_mayonnaise.png',
             'text' => 'Produce 60 Mayonnaise',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200045',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '936',
             'experience' => '134',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Secret Pétanque I',
         'description' => 'Yes! All my friends are about to come and play in the evening while Grandma is having her daily nap!',
      ),
    ),
  ),
   200045 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200045',
       'title' => 'Secret Pétanque II',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Will do!',
       'description' => 'Shhh...I don\'t want Grandma to know about our game as she will ruin our enjoyment with all her facts about Pétanque! We need more food!',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600008',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_chorizo_frittata.png',
             'text' => 'Prepare 8 Chorizo Frittatas',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600039',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_rice_krispies.png',
             'text' => 'Prepare 10 Rice Krispies',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200046',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Secret Pétanque II',
         'description' => 'Game on! It\'s time to throw the jack! We have a few hours to play and we won\'t be hungry because we ate so much! Thank\'s a lot!',
      ),
    ),
  ),
   200046 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200046',
       'title' => 'Magic Almonds I',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Abracadabra!',
       'description' => 'Darryl! Did you know that almonds are magic? Not only are they great to eat, they are great for your skin. You should try some!',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '2',
             'filter' => '20151',
             'icon_url' => 'images/task/st_almond_tree.png',
             'text' => 'Have 2 Almond Trees',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '20152',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_almond.png',
             'text' => 'Harvest 8 Almonds',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '20',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_cheese.png',
             'text' => 'Produce 40 Cheddar Cheese',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200047',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Magic Almonds I',
         'description' => 'I wonder if almonds or cheese contain more energy? We can perform a chemistry experiment; let\'s get the microscope and Bunsen burner.',
      ),
    ),
  ),
   200047 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200047',
       'title' => 'Magic Almonds II',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Shasam!',
       'description' => 'The results: almonds are packed full of more energy compared to the cheese. They are also good for your heart and cholesterol as well as your skin, let\'s have some more.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600015',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_almond_spread.png',
             'text' => 'Prepare 8 Almond Spread',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600022',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_almond_omlet.png',
             'text' => 'Prepare 8 Almond Omelets',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200048',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Magic Almonds II',
         'description' => 'The omelet tastes great because of the added almonds. Food like this means I don\'t need to feel bad about having a lots of meals.',
      ),
    ),
  ),
   200048 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200048',
       'title' => 'The Italian Job I',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Veloce!',
       'description' => 'Si! I have Italian Ancestors, didn\'t you know? Call me "Mamma" but I would love some Tiramisu! I can quickly make some now.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '9410',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_chocolate.png',
             'text' => 'Harvest 8 Chocolates',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '65016',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_tiramisu.png',
             'text' => 'Produce 8 Tiramisu',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200049',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Italian Job I',
         'description' => 'Magnifico! I love the smell and it tastes so good!',
      ),
    ),
  ),
   200049 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200049',
       'title' => 'The Italian Job II',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Si!',
       'description' => 'Grandma\'s Italian relatives will stop by the farm to grab some fresh produce for their onward journey! Let\'s get ready for their arrival!',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '9',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_corn.png',
             'text' => 'Plant 40 Corn',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '13',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_corn.png',
             'text' => 'Harvest 40 Corn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '126',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cornmeal.png',
             'text' => 'Prepare 20 Cornmeal',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200050',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Italian Job II',
         'description' => 'Fantastico! That\'s the first step done! Let\'s keep going, Presto, Presto!',
      ),
    ),
  ),
   200050 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200050',
       'title' => 'The Italian Job III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Tutto Bene!',
       'description' => 'They have arrived quickly "Ciao a  tutti quanti! Finalmente!"  Hurry! Let\'s make them happy!',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '65006',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Produce 20 Corn Bread',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '65006',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Sell 20 Cornbread from the Barn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '65016',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_tiramisu.png',
             'text' => 'Sell 8 Tiramisu from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200051',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'The Italian Job III',
         'description' => 'They took everything we made which is great and they left with a big hug! Ciao, buon viaggio!',
      ),
    ),
  ),
   200051 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200051',
       'title' => 'Darryl\'s New Game I',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Let\'s see',
       'description' => 'Darryl seems grumpy, I wonder why? Maybe Grandma has said something to him, I\'ll finish making these items for the store and then see what\'s going on.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '2',
             'filter' => '20153',
             'icon_url' => 'images/task/st_lemon_tree.png',
             'text' => 'Have 2 Lemon Trees',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '20154',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_lemon.png',
             'text' => 'Harvest 10 Lemons',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200052',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s New Game I',
         'description' => 'Maybe I should use the lemons to make some lemonade to get rid of Darryl\'s bad mood. Let\'s try and find Grandma!',
      ),
    ),
  ),
   200052 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200052',
       'title' => 'Darryl\'s New Game II',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Fingers crossed',
       'description' => 'Grandma is free now, but I can\'t find Darryl. I\'ll pour her some champagne to try and get her in a good mood and then ask what\'s going on.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '200458',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_charnonnay.png',
             'text' => 'Harvest 40 Chardonnay',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '200459',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_champagne.png',
             'text' => 'Produce 40 bottles of Champagne',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '600007',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_lemon_champagne.png',
             'text' => 'Produce 20 Lemon Champagne',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200053',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s New Game II',
         'description' => 'Grandma will definitely be in a happy mood with this champagne, I\'ll ask her what\'s going on, maybe I can even help.',
      ),
    ),
  ),
   200053 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200053',
       'title' => 'Darryl\'s New Game III',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Me too',
       'description' => 'I found out! Darryl really wants a new toy but Grandma has said he needs to save up for it, so he\'s moody. If I need some new clothes I need to save too, I wish I could always go shopping.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '42',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_grape.png',
             'text' => 'Harvest 40 Grapes',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '200466',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_grape_juice.png',
             'text' => 'Produce 40 glasses of Grape Juice',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '600043',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_cocktail.png',
             'text' => 'Prepare 20 Lemon Cocktails',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200054',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s New Game III',
         'description' => 'I have an idea, let\'s sell this stuff to help Darryl get his toy. At least he can\'t get annoyed when I beat him at his game!',
      ),
    ),
  ),
   200054 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200054',
       'title' => 'Darryls New Game IV',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Keep saving',
       'description' => 'Darryl wants to buy a racket game, I\'m glad it\'s not another video game because I can\'t play them. I know he will get really annoyed if I beat him hehe.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '20115',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_beef.png',
             'text' => 'Produce 40 Beef',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '19',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_ketchup.png',
             'text' => 'Produce 40 Ketchup',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600005',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_grilled_asian_flank_steak.png',
             'text' => 'Prepare 10 Grilled Flank Steaks',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200055',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '720',
             'experience' => '103',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s New Game IV',
         'description' => 'That steak is really good quality from our farm, I know it will sell fast! I\'ll find out how much money Darryl has from Grandma.',
      ),
    ),
  ),
   200055 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200055',
       'title' => 'Darryl\'s New Game V',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Keep going',
       'description' => 'Grandma has told me that Darryl has nearly half the money. He doesn\'t know I am helping him out yet. I can\'t wait to surprise him and help him get the game earlier than he is expecting, nearly there..',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600036',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cake_flour.png',
             'text' => 'Prepare 10 Cake Flour',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600037',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_batter.png',
             'text' => 'Prepare 10 Batter',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600040',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_soft_dough.png',
             'text' => 'Prepare 10 Soft Dough',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200056',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s New Game V',
         'description' => 'I could make so many good cakes from these ingredients! Oh well, it\'s really nice to help Darryl out and we can both play the game.',
      ),
    ),
  ),
   200056 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200056',
       'title' => 'Darryl\'s New Game VI',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Nearly finished',
       'description' => 'After I make these last few items, we will have enough money and get to go shopping. Yey! I hope Grandma treats me to a new dress or hot chocolate when we go.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '30102',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_gisla_cherry.png',
             'text' => 'Harvest 12 Gisela Cherry',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600041',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cherry_flan.png',
             'text' => 'Prepare 10 Cherry Flan',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600041',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cherry_flan.png',
             'text' => 'Sell 10 Cherry Flan from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '200057',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s New Game VI',
         'description' => 'Shopping time, Yey. Fingers crossed to see if Grandma will treat me to a new dress',
      ),
    ),
  ),
   200057 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '200057',
       'title' => 'Darryl\'s New Game VII',
       'scene' => 1,
       'npc' => '1',
       'visible' => 'TRUE',
       'des_button' => 'Good idea',
       'description' => 'It\'s so lovely of Felicia to help me out. Even though she beat me at our first game, I will sell a few more things and get her a bracelet to match her new dress Grandma got her.',
       'opengraph_des' => 'opengraph_des',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '55006',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_lychee.png',
             'text' => 'Harvest 10 Lychee',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600042',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lychee_scone.png',
             'text' => 'Prepare 10 Lychee Scones',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600042',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lychee_scone.png',
             'text' => 'Sell 10 Lychee Scones from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '540',
             'experience' => '77',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Darryl\'s New Game VII',
         'description' => 'She loved the bracelet. Game on! It\'s time for a rematch with Felicia, it\'s best of 3 games now.',
      ),
    ),
  ),
   210001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '210001',
       'title' => 'Grandma\'s Orders I',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Great! Let\'s do it!',
       'description' => 'Felicia\'s instincts were correct; more orders are on the way. We need to farm quickly to keep up, let\'s get farming!',
       'opengraph_des' => '%s is ready for your orders! Find out what you can order by Playing Family Farm Seaside now.',
       'hint' => 'Orders come on a special board, make sure you can see it on your farm',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '690000',
             'icon_url' => 'images/task/st_order.png',
             'text' => 'Purchase an __filter',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '6',
             'filter' => '48',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_apple_tree.png',
             'text' => 'Have 6 apple trees',
             'shopping' => '1',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '210002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Grandma\'s Orders I',
         'description' => 'Good work! You can always trust Felicia\'s instincts. Share the good news with your friends!',
      ),
    ),
  ),
   210002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '210002',
       'title' => 'Grandma\'s Orders II',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Great!',
       'description' => 'Today\'s order has arrived, it\'s quite exciting. Let\'s check what it says on the order board. I wonder what we have to make!',
       'opengraph_des' => '%s is a good farmer! How about you? Test your skills and have fun by playing Family Farm Seaside',
       'hint' => 'Orders refresh every day. Make sure you finish it before it expires.',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '4',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Plant 25 clovers',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '30127',
             'icon_url' => 'images/task/st_cucumber.png',
             'text' => 'Plant 15 cucumbers',
             'shopping' => '1',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '210003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '390',
             'experience' => '55',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Grandma\'s Orders II',
         'description' => 'Well done! You are a good farmer, keep up the good work.',
      ),
    ),
  ),
   210003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '210003',
       'title' => 'Grandma\'s Orders III',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Sounds good.',
       'description' => 'Shh, don\'t tell anyone but here are some secrets about the orders. You need to plant some vegetables or fruits to finish the first order. This is usually the easiest one to complete.',
       'opengraph_des' => 'First order completed! Find out what %s had to make, play Family Farm Seaside.',
       'hint' => 'You need clover to allow your bees to produce honey.',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '46',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_honey.png',
             'text' => 'Collect 15 jars of Honey',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '30130',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_buffalo_milk.png',
             'text' => 'Produce 15 Buffalo Milk',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '210004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Grandma\'s Orders III',
         'description' => 'Now you can sell the clovers to finish the first order and then you can get some exp and order points.',
      ),
    ),
  ),
   210004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '210004',
       'title' => 'Grandma\'s Orders IV',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Ok. I see.',
       'description' => 'Hey, you need some machines or animals to finish the second order. For the third order, you need to cook it in the kitchen.',
       'opengraph_des' => '%s has just finished today\'s order, make sure you get yours done as well in Family Farm Seaside.',
       'hint' => 'Machines make it much easier to complete orders.',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '30131',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_buffalo_milk_cheese.png',
             'text' => 'Produce 15 Buffalo Milk Cheese',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '600003',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_apple_cheese.png',
             'text' => 'Prepare 3 Cheese Apples',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'finish_order',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'order',
             'icon_url' => 'images/task/st_finish_order.png',
             'text' => 'Check the order board and finish the order',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '210005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '585',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Grandma\'s Orders IV',
         'description' => 'Well Done! You have finished today\'s order. When you finish all three orders you get 10 bonus order points.',
      ),
    ),
  ),
   210005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '210005',
       'title' => 'Grandma\'s Orders V',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Thanks.',
       'description' => 'I have shared my top tips with you so I think you should be able to complete the orders by yourself. I bet you can finish them, good luck!',
       'opengraph_des' => 'Family Farm Seaside wants to give %s a big reward and you can help. Play Family Farm Seaside and give him a helping hand.',
       'hint' => 'Check your farm every day for new orders.',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'finish_order',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'order',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_finish_order.png',
             'text' => 'Wait and complete the next day\'s order',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '-1',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '585',
             'experience' => '83',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Grandma\'s Orders V',
         'description' => 'If you get enough points you will get the BIG REWARD. I look forward to you receiving the final reward.',
      ),
    ),
  ),
   210006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '210006',
       'title' => 'Grandma\'s Orders I',
       'scene' => 1,
       'npc' => '4',
       'visible' => 'TRUE',
       'des_button' => 'Great! Let\'s do it!',
       'description' => 'Felicia\'s instincts were correct; more orders are on the way. We need to farm quickly to keep up, let\'s get farming!',
       'opengraph_des' => '%s is ready for your orders! Find out what you can order by Playing Family Farm Seaside now.',
       'hint' => 'Orders come on a special board, make sure you can see it on your farm',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'building_area_exist',
             'total' => '1',
             'filter' => '2',
             'icon_url' => 'images/task/st_soil.png',
             'text' => 'Unlock the second plot in the Building Area',
             'show_me' => '104',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '6',
             'filter' => '48',
             'spend_rp' => '12',
             'icon_url' => 'images/task/st_apple_tree.png',
             'text' => 'Have 6 Apple Trees',
             'shopping' => '1',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '210002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '468',
             'experience' => '67',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Grandma\'s Orders I',
         'description' => 'Good work! You can always trust Felicia\'s instincts. Share the good news with your friends!',
      ),
    ),
  ),
   211001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211001',
       'title' => 'Mother’s Day 1',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 22,
       'visible' => 'TRUE',
       'des_button' => 'I am so excited!',
       'description' => 'Felicia heard that August is the month of Mother’s love in Thailand. It celebrates motherhood and it is a time to appreciate mothers and mother figures. Let find something to surprise grandma with. What should we do?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '200534',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_mapple_syrup.png',
             'text' => 'Harvest __total Maple Syrup',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '65006',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_cornbread.png',
             'text' => 'Produce __total loaves of Corn Bread',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '210',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Mother’s Day 1',
         'description' => 'Great food is the best way to start your day! We have plenty of energy now!',
      ),
    ),
  ),
   211002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211002',
       'title' => 'Mother’s day 2',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 22,
       'visible' => 'TRUE',
       'des_button' => 'Sure !',
       'description' => 'I think we have to cook something special for grandma ,but what should we do then ? ….Oh wait !!! Darryl just told me that we have a lot of orders to finish, but we don’t have enough time to do it ,Anyone can help?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '16',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_wheat.png',
             'text' => 'Harvest __total Wheat',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '9412',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_love_fruit.png',
             'text' => 'Harvest __total Love Fruit',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'finish_order',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'order',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_order.png',
             'text' => 'Finished today\'s order board',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '220',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Mother’s day 2',
         'description' => 'Alright, let\'s finish it soon. Grandma is coming back. Hey...Darryl! Come he to brainstorm!',
      ),
    ),
  ),
   211003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211003',
       'title' => 'Mother’s day 3',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 22,
       'visible' => 'TRUE',
       'des_button' => 'okay! madam!',
       'description' => 'Grandma really love the dish that made from fish. You know fish is really good for  health. it ‘s time to be a fisherman  again . Darryl  Please don’t tell grandma where I am gonna go and  help me  to get some lemon …. I will cook  something spicy and good for health',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'fish',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '700016',
             'properties' => 'fishing_fish: 700016',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_butterfish.png',
             'text' => 'Fishing __total Butterfish',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600216',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_lemon_fish.png',
             'text' => 'Prepare __total Lemon Fish',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '200459',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_champagne.png',
             'text' => 'Prepare __total Champagne',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '220',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Mother’s day 3',
         'description' => 'These recipes made from fresh ingredients in our farm. So delicious!!',
      ),
    ),
  ),
   211004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211004',
       'title' => 'Mother’s day 4',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 22,
       'visible' => 'TRUE',
       'des_button' => 'Happy Mother’s day !',
       'description' => 'Yeah..Grandma seems like our surprise so much. Wow..Smell of jasmin in the farm is so fresh and sweet! Shall we use them to make some dessert for grandma. I’m sure she will love it. That’s so great!! Today, Grandma don’t have to do anything. She can have a rest for a whole day coz we will manage everything for her.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '500294',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_jasmine.png',
             'text' => 'Harvest __total Jasmine',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '6',
             'filter' => '600202',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_dumpling_coconut_cream.png',
             'text' => 'Prepare __total Dumplings in Coconut Cream',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '65017',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_love_cake.png',
             'text' => 'Produce __total Love Cake',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'items' => '590224:1',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Mother’s day 4',
         'description' => 'Everything done , we\'ve all had a nice time today.Everybody! Don’t forget to be nice to your Mom on this mother’s day!',
      ),
    ),
  ),
   211005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211005',
       'title' => 'Grandma\'s Present I',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 15,
       'visible' => 'TRUE',
       'des_button' => 'Let\'s apply!',
       'description' => 'Grandma\'s Birthday is coming up and I saw a cookbook yesterday that she will love! But it is a bit expensive! There was an ad in the local paper that they\'re searching for a waitress in the Coffee House!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '650006',
             'icon_url' => 'images/task/st_coffeehouse.png',
             'text' => 'Place a Coffee House on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '600321',
             'icon_url' => 'images/task/st_butter_pie.png',
             'text' => 'Prepare __total Butter Pies',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '1000',
             'filter' => 'coins',
             'icon_url' => 'images/task/st_coins.png',
             'text' => 'Sell products worth __total Coins from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211006',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '350',
             'experience' => '15',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Grandma\'s Present I',
         'description' => 'The Coffee House job was really fun and I made some good money! More than enough to get the cookbook! Can\'t wait to see Grandma\'s face!',
      ),
    ),
  ),
   211006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211006',
       'title' => 'Grandma\'s Present II',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 15,
       'visible' => 'TRUE',
       'des_button' => 'Expensive but can\'t wait!',
       'description' => 'Grandma loved the Cookbook so much, she got a bit too excited and bought a new stove! Let\'s see what she will cook for us!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '650007',
             'icon_url' => 'images/task/st_stove_dish.png',
             'text' => 'Place a Stove House on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'stoveClaimProduct',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'filter' => '660059',
             'icon_url' => 'images/task/st_macaroni_and_cheese.png',
             'text' => 'Prepare __total Macaroni and Cheese',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '500001',
             'icon_url' => 'images/task/st_cheese_burger.png',
             'text' => 'Produce __total Cheese Burgers',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '500',
             'experience' => '25',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Grandma\'s Present II',
         'description' => 'Wow the dishes are delicious! Let\'s practice more to make them even faster and better!',
      ),
    ),
  ),
   211007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211007',
       'title' => 'Open for Business!',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 14,
       'visible' => 'TRUE',
       'des_button' => 'Can\'t wait!',
       'description' => 'You can now trade with your neighbors at the Flea Market and trade internationally with all farmers using the E-Mart!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '650008',
             'icon_url' => 'images/task/st_fleaMarket.png',
             'text' => 'Have a Flea Market on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '650009',
             'icon_url' => 'images/task/st_emart.png',
             'text' => 'Have an E-Mart on your farm',
             'shopping' => '1',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '15',
             'filter' => '500001',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_cheese_burger.png',
             'text' => 'Produce __total Cheese Burgers and sell them in the Flea Market',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '500',
             'experience' => '20',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Flea Market and E-Mart',
         'description' => 'Sell your goods at your Flea Market! Advertise your products to sell them internationally on the E-Mart!',
      ),
    ),
  ),
   211008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211008',
       'title' => 'My First Pet 1',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 10,
       'visible' => 'TRUE',
       'des_button' => 'You\'re right!',
       'left_mission_order' => 100,
       'description' => 'Last night I had a wonderful dream! I dreamed that I adopted a very cute dog. This dream is still so vivid in my memory... Now I wonder, why don\'t we have pets actually?',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '650010',
             'icon_url' => 'images/task/st_pethouse.png',
             'text' => 'Have a Pet House on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'map',
             'total' => '10',
             'ignore_filter' => '1',
             'properties' => 'type:road',
             'icon_url' => 'images/task/st_place_road.png',
             'text' => 'Have __total paths on your farm',
             'show_me' => '301',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '500',
             'experience' => '20',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Pet House',
         'description' => 'How cute our pet looks walking on the path! I promise I will take good care of my new pet!',
      ),
    ),
  ),
   211009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211009',
       'title' => 'My First Pet 2',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 10,
       'visible' => 'TRUE',
       'des_button' => 'Good idea!',
       'left_mission_order' => 100,
       'description' => 'Do you know pets will only walk around on the paths? We already have paths on the farm... I can\'t wait to see our pet!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'pet_road',
             'total' => '1',
             'icon_url' => 'images/task/st_pet_dog.png',
             'text' => 'Have a Pet on your farm',
             'show_me' => '302',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'digPetChest',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => 'none',
             'ignore_filter' => '1',
             'icon_url' => 'images/task/st_dig_chest.png',
             'text' => 'Dig __total chests on the path',
             'show_me' => '303',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211011',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '500',
             'experience' => '20',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Pet House',
         'description' => 'The more pets you have on your farm, the more chests you can find!',
      ),
    ),
  ),
   211010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211010',
       'title' => 'My First Pet 4',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 10,
       'visible' => 'TRUE',
       'des_button' => 'Incredible!',
       'left_mission_order' => 100,
       'description' => 'People from around the world heard about our new pet house and they would love to pay a visit! Let\'s welcome the guests!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '650011',
             'icon_url' => 'images/task/st_npchouse.png',
             'text' => 'Have a Guest Center on your farm',
             'gogiftbox' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'petNpc',
             'total' => '1',
             'icon_url' => 'images/task/st_npc_open.png',
             'text' => 'Invite the group of guests to the farm',
             'show_me' => '307',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'petHandleOrder',
             'category' => 'action',
             'type' => 'default',
             'total' => '3',
             'icon_url' => 'images/task/st_npc_order.png',
             'text' => 'Complete __total guest orders',
             'ignore_filter' => '1',
             'show_me' => '308',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211012',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '500',
             'items' => '690428:1',
             'experience' => '20',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Guest Center',
         'description' => 'This will be a good business! When the new area in the Guest Center opens, we will have all kinds of new guests!',
      ),
    ),
  ),
   211011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211011',
       'title' => 'My First Pet 3',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 10,
       'visible' => 'TRUE',
       'left_mission_order' => 100,
       'des_button' => 'Of course!',
       'description' => 'I think we played with our pet too much. They look a bit tired... We can let them rest in the pet house and serve some healthy, organic pet food.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'exchangePetFood',
             'category' => 'action',
             'type' => 'default',
             'total' => '26',
             'icon_url' => 'images/task/st_pet_food.png',
             'text' => 'Trade __total Pet Food',
             'show_me' => '304',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'feedPet',
             'category' => 'action',
             'type' => 'default',
             'total' => '26',
             'icon_url' => 'images/task/st_pet_feed.png',
             'text' => 'Feed __total Pet Food',
             'ignore_filter' => '1',
             'show_me' => '305',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '500',
             'items' => '650011:1',
             'experience' => '20',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Pet Food',
         'description' => 'Our pet looks so happy after eating! When pets have no stamina, they need rest and food!',
      ),
    ),
  ),
   211012 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211012',
       'title' => 'Landscaping',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 10,
       'left_mission_order' => 100,
       'visible' => 'TRUE',
       'des_button' => 'You\'re right!',
       'description' => 'Look at our farm. I think we can do a better job making it pretty for our pet and the new guests who will come to visit.',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'lsp',
             'total' => '35',
             'icon_url' => 'images/task/st_lanscape_up.png',
             'text' => 'Increase Landscape Points to __total points',
             'show_me' => '306',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'petLevel',
             'total' => '1',
             'properties' => 'level:2',
             'icon_url' => 'images/task/st_pet_levelup.png',
             'text' => 'Have a level 2 pet',
             'show_me' => '309',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '211013',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '500',
             'items' => '82003:290',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Landscape Points',
         'description' => 'Remember: the higher the landscape points, the happier our pets and guests will be!',
      ),
    ),
  ),
   211013 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '211013',
       'title' => 'Factory',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 10,
       'left_mission_order' => 100,
       'visible' => 'TRUE',
       'des_button' => 'Great!',
       'description' => 'In the Factory, we can forge equipment with abilities and make our pet more powerful!',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '650012',
             'icon_url' => 'images/task/st_factory.png',
             'text' => 'Place a Factory on the ground',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'processingSmelt',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => 'none',
             'ignore_filter' => '1',
             'icon_url' => 'images/task/st_smelt_equip.png',
             'text' => 'Forge __total Equipment (Check the materials in your Giftbox)',
             'show_me' => '37',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'petChangeEquip',
             'category' => 'action',
             'type' => 'default',
             'total' => '1',
             'filter' => '3',
             'icon_url' => 'images/task/st_wear_equip.png',
             'text' => 'Place __total equipment on pet\'s neck',
             'show_me' => '38',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '500',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Factory',
         'description' => 'In the Factory, you can also disassemble equipment you don\'t like to get some materials back!',
      ),
    ),
  ),
   510001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510001',
       'title' => 'Farm Management I',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'Dad has been thinking about how to make the Island Farm more prosperous. Felicia and I have decided to help Dad and manage the Farm better.',
       'des_button' => 'Great!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '80',
             'filter' => '7023',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_honey_suckle.png',
             'show_me' => '101',
             'text' => 'Harvest __total Honeysuckles',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '8005',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_bamboo.png',
             'show_me' => '101',
             'text' => 'Harvest __total Bamboo Shoots from Bamboo',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '8007',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_tea_tree_leaf.png',
             'show_me' => '101',
             'text' => 'Harvest __total Tea Tree Leaf',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510002',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1000,
             'experience' => 100,
             'develop_points' => 10,
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Management I',
         'description' => 'The first step is to grow as many plants as possible!',
      ),
    ),
  ),
   510002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510002',
       'title' => 'Farm Management II',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'If we plant lots of plants the Island Farm will flourish! Hmmm, do you think something is missing? Let\'s make some Farm products!',
       'des_button' => 'Let\'s go!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '30142',
             'spend_rp' => '5',
             'show_me' => '101',
             'icon_url' => 'images/task/st_beef_hotdog.png',
             'text' => 'Produce __total Beef Hotdogs',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '40080',
             'spend_rp' => '5',
             'show_me' => '101',
             'icon_url' => 'images/task/st_cranberry_yogurt.png',
             'text' => 'Produce __total jars of Cranberry Yogurt',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '11004',
             'spend_rp' => '5',
             'show_me' => '101',
             'icon_url' => 'images/task/st_chestnut_flour.png',
             'text' => 'Produce __total bags of Chestnut Flour',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510003',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1000,
             'experience' => 100,
             'develop_points' => 10,
             'items' => '71030:2',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Management II',
         'description' => 'Now the Island Farm produces its own plants and products!',
      ),
    ),
  ),
   510003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510003',
       'title' => 'Farm Management III',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'Ok, we have great plans but not enough money. Dad suggested that we craft and sell products from the Hardware Store for a big profit!',
       'des_button' => 'Good suggestion!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '620002',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_nut.png',
             'text' => 'Sell __total Nuts from the Barn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '620003',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_lag_bolt.png',
             'text' => 'Sell __total Lag Bolts from the Barn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '620004',
             'spend_rp' => '4',
             'icon_url' => 'images/task/st_nail.png',
             'text' => 'Sell __total Nails from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510004',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1400,
             'experience' => 140,
             'develop_points' => 14,
             'items' => '71030:2',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Management III',
         'description' => 'Great! We made enough money to purchase more machines and animals!',
      ),
    ),
  ),
   510004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510004',
       'title' => 'Farm Management IV',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'So, now we have enough money. I had a discussion with Dad and Felicia, and we decided to raise precious trees and animals on the Island Farm!',
       'des_button' => 'What about a Panda!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'feed_object',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '41028',
             'spend_rp' => 8,
             'show_me' => '101',
             'icon_url' => 'images/task/st_panda.png',
             'text' => 'Feed the Panda __total times',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '11801',
             'spend_rp' => '8',
             'show_me' => '101',
             'icon_url' => 'images/task/st_camomile_basket.png',
             'text' => 'Produce __total Camomile Baskets',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '8021',
             'spend_rp' => '3',
             'show_me' => '101',
             'icon_url' => 'images/task/st_red_sanders.png',
             'text' => 'Harvest __total Red Sandalwood',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510005',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1200,
             'experience' => 120,
             'develop_points' => 12,
             'items' => '71030:2',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Management IV',
         'description' => 'Wow, the Panda feels so soft and the Red Sandalwood looks so grand!',
      ),
    ),
  ),
   510005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510005',
       'title' => 'Farm Management V',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'We\'ve really improved the Island Farm and it looks great! How can we attract guests and visitors to our Island Farm? Dad suggested that we produce local handicrafts.',
       'des_button' => 'Beautiful!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '11802',
             'spend_rp' => '8',
             'show_me' => '101',
             'icon_url' => 'images/task/st_lily_basket.png',
             'text' => 'Produce __total Lily Baskets',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '200328',
             'spend_rp' => '8',
             'show_me' => '101',
             'icon_url' => 'images/task/st_peacock_hat.png',
             'text' => 'Produce __total Peacock Hats',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'user',
             'total' => '2000',
             'filter' => 'dp',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_dev_points.png',
             'show_me' => '103',
             'text' => 'Have __total Dev Points',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1400,
             'experience' => 140,
             'develop_points' => 14,
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Farm Management V',
         'description' => 'These handicrafts sold really well! Every guest and visitor we had raved about our new Island Farm!',
      ),
    ),
  ),
   510006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510006',
       'title' => 'Woodworking Day I',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'Do you really think that I\'m good at woodworking? It\'s all from Dad\'s teaching! ',
       'des_button' => 'Really?',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '620003',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_lag_bolt.png',
             'text' => 'Sell __total Lag Bolts from the Barn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '620004',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_nail.png',
             'text' => 'Sell __total Nails from the Barn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '620005',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_wrench.png',
             'text' => 'Sell __total Wrenches from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510007',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1600,
             'experience' => 160,
             'develop_points' => 16,
             'items' => '71030:2',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Woodworking Day I',
         'description' => 'Of course many materials are needed for woodworking!',
      ),
    ),
  ),
   510007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510007',
       'title' => 'Woodworking Day II',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'So, today I will teach Felicia woodworking. First, I will need to eat something...',
       'des_button' => 'Hmm...',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '8003',
             'spend_rp' => '4',
             'show_me' => '101',
             'icon_url' => 'images/task/st_chestnut.png',
             'text' => 'Harvest __total Chestnuts from Chestnut Tree',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '70',
             'filter' => '41033',
             'spend_rp' => '35',
             'show_me' => '101',
             'icon_url' => 'images/task/st_squirrel_hair.png',
             'text' => 'Produce __total Squirrel Hair',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '20071',
             'spend_rp' => '5',
             'show_me' => '101',
             'icon_url' => 'images/task/st_pineapple_yogurt.png',
             'text' => 'Produce __total jars of Pineapple Yogurt',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510008',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1600,
             'experience' => 160,
             'develop_points' => 16,
             'items' => '1909:5',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Woodworking Day II',
         'description' => 'Did you see that squirrel eating a chestnut? So cute!',
      ),
    ),
  ),
   510008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510008',
       'title' => 'Woodworking Day III',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'I have already prepared the wood, let\'s see if Felicia can handle it!',
       'des_button' => 'Well...',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'productionHouseProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '630005',
             'spend_rp' => 5,
             'icon_url' => 'images/task/st_sawdust.png',
             'text' => 'Craft __total Sawdust in the Sawmill',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'workshopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '619001',
             'spend_rp' => 5,
             'icon_url' => 'images/task/st_gunpowder.png',
             'text' => 'Craft __total Gunpowder in the Workshop',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'workshopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => '619004',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_barrel_bomb.png',
             'text' => 'Craft __total Barrel Bomb in the Workshop',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510009',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1600,
             'experience' => 160,
             'develop_points' => 16,
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Woodworking Day III',
         'description' => 'Wow! She has crafted bombs already!',
      ),
    ),
  ),
   510009 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510009',
       'title' => 'Woodworking Day IV',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'It\'s hard to admit this, but I can see that Felicia is very good. Let\'s take a rest, we have more tasks to do in the Workshop!',
       'des_button' => 'Ok!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '20077',
             'spend_rp' => '5',
             'show_me' => '101',
             'icon_url' => 'images/task/st_chocolate_yogurt.png',
             'text' => 'Produce __total jars of Chocolate Yogurt',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '50',
             'filter' => '65013',
             'spend_rp' => '5',
             'show_me' => '101',
             'icon_url' => 'images/task/st_turkey_hotdog.png',
             'text' => 'Produce __total Turkey Hotdogs',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'default',
             'category' => 'collect',
             'type' => 'user',
             'total' => '3500',
             'filter' => 'dp',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_dev_points.png',
             'show_me' => '103',
             'text' => 'Have __total Dev Points',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510010',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1600,
             'experience' => 160,
             'develop_points' => 16,
             'items' => '71030:1',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Woodworking Day IV',
         'description' => 'Hotdogs are always my favorite! ',
      ),
    ),
  ),
   510010 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510010',
       'title' => 'Woodworking Day V',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'Now we have produced items, let\'s make a profit! ',
       'des_button' => 'How can I help?',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '35',
             'filter' => '620004',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_nail.png',
             'text' => 'Sell __total Nails from the Barn',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '620005',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_wrench.png',
             'text' => 'Sell __total Wrenches from the Barn',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'sell_items',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '620006',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_screwdriver.png',
             'text' => 'Sell __total Screwdrivers from the Barn',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '510011',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 2500,
             'experience' => 180,
             'develop_points' => 18,
             'items' => '71030:2',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Woodworking Day V',
         'description' => 'Nice job! Father will be proud of us!  ',
      ),
    ),
  ),
   510011 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '510011',
       'title' => 'Woodworking Day VI',
       'scene' => 2,
       'npc' => '‘3’',
       'visible' => 'TRUE',
       'description' => 'Wow, it\'s already time to go to bed. Can you please help me prepare a nice bath?',
       'des_button' => 'Sure!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '80',
             'filter' => '7033',
             'spend_rp' => '8',
             'show_me' => '101',
             'icon_url' => 'images/task/st_muskmelon.png',
             'text' => 'Harvest __total Muskmelons',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '8023',
             'spend_rp' => '4',
             'show_me' => '101',
             'icon_url' => 'images/task/st_rubber.png',
             'text' => 'Harvest __total Rubber from Rubber Tree',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '203101',
             'spend_rp' => '4',
             'show_me' => '101',
             'icon_url' => 'images/task/st_tea_tree_soap.png',
             'text' => 'Produce __total Tea Tree Soap',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => ' ',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 2500,
             'experience' => 180,
             'develop_points' => 18,
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Woodworking Day VI',
         'description' => 'Our Farm soap is the best! Thanks Farmer for helping me today! ',
      ),
    ),
  ),
   530001 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '530001',
       'title' => 'Chocolate Frenzy I',
       'scene' => 1,
       'npc' => 1,
       'visible' => 'TRUE',
       'unlock_level' => 60,
       'description' => 'Hey, Farmer! You might already know that I have a sweet tooth... But do you know my biggest weakness? That\'s right! I\'d do ANYTHING for a piece of chocolate!',
       'des_button' => 'Me too...',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '65009',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_white_chocolate.png',
             'text' => 'Harvest __total White Chocolate',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '12',
             'filter' => '500207',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_dark_chocolate.png',
             'text' => 'Harvest __total Dark Chocolate',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600020',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_chocolate_dream_bar.png',
             'text' => 'Prepare __total Chocolate Dream Bars',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => 530002,
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 600,
             'experience' => 120,
             'power' => 5,
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Chocolate Frenzy I',
         'description' => 'White chocolate, dark chocolate... I\'ll have it either way!',
      ),
    ),
  ),
   530002 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '530002',
       'title' => 'Chocolate Frenzy II',
       'scene' => 1,
       'npc' => 1,
       'unlock_level' => 60,
       'visible' => 'TRUE',
       'description' => 'I\'ve been researching the history of chocolate for a school project and I learned some really cool things! Did you know that the ancient Maya and Aztecs knew how to grow cacao trees and drank chocolate?',
       'des_button' => 'Really?',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '84',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_blueberry.png',
             'text' => 'Harvest __total Blueberries',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => 'fertilize',
             'ignore_filter' => '1',
             'icon_url' => 'images/task/st_fertilizer.png',
             'text' => 'Use Fertilizer __total times',
             'show_me' => '14',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600362',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_macadamia_chocolate_nuts.png',
             'text' => 'Prepare __total Macadamia Chocolate Nuts',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => 530003,
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'will_share' => '',
             'coins' => 600,
             'experience' => 120,
             'power' => 5,
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Chocolate Frenzy II',
         'description' => 'Yes! The name "chocolate" comes from the Aztec word "xocoatl"!',
      ),
    ),
  ),
   530003 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '530003',
       'title' => 'Chocolate Frenzy III',
       'scene' => 1,
       'npc' => 1,
       'unlock_level' => 60,
       'visible' => 'TRUE',
       'description' => 'While the Aztecs liked to drink liquid chocolate, I prefer it in a solid form! Just imagine a smooth milk chocolate bar with crisp, crunchy peanuts... I\'m drooling!',
       'des_button' => 'I\'ll have some too!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '20001',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_bean.png',
             'text' => 'Harvest __total Beans',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '30095',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_beef_salami.png',
             'text' => 'Produce __total Beef Salami',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'stoveClaimProduct',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '660069',
             'spend_rp' => '9',
             'icon_url' => 'images/task/st_full_english_breakfast.png',
             'text' => 'Cook __total Full English Breakfasts',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => 530004,
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 800,
             'experience' => 200,
             'will_share' => '',
             'power' => 5,
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Chocolate Frenzy III',
         'description' => 'Grandma says too much sugar isn\'t good for me, so I\'m only allowed one piece a day...',
      ),
    ),
  ),
   530004 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '530004',
       'title' => 'Chocolate Frenzy IV',
       'scene' => 1,
       'unlock_level' => 60,
       'npc' => 1,
       'visible' => 'TRUE',
       'description' => 'But... Chocolate Creme Puffs are not technically chocolate bars, right? I\'m sure Grandma won\'t mind if I have one... Or five! Let\'s go to the Kitchen!',
       'des_button' => 'Be good, Darryl!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '25',
             'filter' => '9120',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_onion.png',
             'text' => 'Harvest __total Onion',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '600420',
             'spend_rp' => '8',
             'icon_url' => 'images/task/st_chocolate_creme_puff.png',
             'text' => 'Prepare __total Chocolate Creme Puffs',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'stoveClaimProduct',
             'category' => 'action',
             'type' => 'default',
             'spend_rp' => 10,
             'total' => '10',
             'filter' => '660019',
             'icon_url' => 'images/task/st_nachos.png',
             'text' => 'Prepare __total Nachos',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => 530005,
             'power' => 5,
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 800,
             'experience' => 120,
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Chocolate Frenzy IV',
         'description' => 'Om nom nom, delicious! Oops, I think Grandma\'s coming! Run for your life!',
      ),
    ),
  ),
   530005 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '530005',
       'title' => 'Ice Cream Stand I',
       'scene' => 1,
       'unlock_level' => 60,
       'npc' => 2,
       'visible' => 'TRUE',
       'description' => 'Have you heard, Farmer? The ice cream truck owner broke his arm and won\'t come to town for the whole summer! It\'s a disaster!',
       'des_button' => 'Oh, no!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_object',
             'category' => 'collect',
             'type' => 'map',
             'total' => '1',
             'filter' => '100255',
             'spend_rp' => '6',
             'icon_url' => 'images/task/st_icecream_machine.png',
             'text' => 'Have an Ice Cream Machine on your farm',
             'shopping' => '1',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '30',
             'filter' => '100258',
             'spend_rp' => '15',
             'icon_url' => 'images/task/st_apple_icecream.png',
             'text' => 'Produce __total Apple Ice Cream',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600065',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_caramel_sauce.png',
             'text' => 'Prepare __total Caramel Sauce',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => 530006,
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'experience' => 120,
             'coins' => 900,
             'will_share' => '',
             'power' => 5,
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Ice Cream Stand I',
         'description' => 'Worry not, my dear friend! Felicia is coming to the rescue!',
      ),
    ),
  ),
   530006 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '530006',
       'title' => 'Ice Cream Stand II',
       'scene' => 1,
       'unlock_level' => 60,
       'npc' => 2,
       'visible' => 'TRUE',
       'description' => 'I don\'t have a truck, but Daddy promised to help me nail together a simple ice cream stand! Darryl and I will take turns selling ice cream on weekends and save the town!',
       'des_button' => 'Awesome!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '20025',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_cauliflower.png',
             'text' => 'Harvest __total Cauliflower',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '5004',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_tulip.png',
             'text' => 'Harvest  __total Tulip',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '30187',
             'spend_rp' => '50',
             'icon_url' => 'images/task/tulip_perfume.png',
             'text' => 'Produce __total Tulip Perfume',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => 530007,
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1000,
             'experience' => 200,
             'will_share' => '',
             'power' => 5,
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Ice Cream Stand II',
         'description' => 'I can also sell some other farm products to make extra money! Tulip Perfumes are uber trendy this summer!',
      ),
    ),
  ),
   530007 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '530007',
       'title' => 'Ice Cream Stand III',
       'scene' => 1,
       'unlock_level' => 60,
       'npc' => 2,
       'visible' => 'TRUE',
       'description' => 'A quick survey at school gave me some insight into this season\'s most popular Ice Cream flavors! We\'d better stock up on plums and limes, Farmer!',
       'des_button' => 'No problem!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '500251',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_plum.png',
             'text' => 'Harvest __total Plum',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '100265',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_plum_icecream.png',
             'text' => 'Produce __total Plum Ice Cream',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'cook',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '600345',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_lime_soft_icecream.png',
             'text' => 'Prepare __total Lime Soft Ice',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => 530008,
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 600,
             'experience' => 200,
             'will_share' => '',
             'power' => 5,
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Ice Cream Stand III',
         'description' => 'That\'s right, goodbye plain old vanilla and chocolate! Fruity flavors are HOT right now!',
      ),
    ),
  ),
   530008 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '530008',
       'title' => 'Ice Cream Stand IV',
       'scene' => 1,
       'unlock_level' => 60,
       'npc' => 2,
       'visible' => 'TRUE',
       'description' => 'My personal favorite is our new peach flavor! Don\'t tell anyone, but I have a secret rule - for every scoop sold, I get to eat one! Yummy!',
       'des_button' => 'Hihi!',
       'hint' => '0',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '8',
             'filter' => '9008',
             'spend_rp' => '5',
             'icon_url' => 'images/task/st_Peach.png',
             'text' => 'Harvest __total Peach',
             'show_me' => '101',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '20',
             'filter' => '100267',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_peach_icecream.png',
             'text' => 'Produce __total Peach Ice Cream',
             'show_me' => '101',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'workshopProduce',
             'category' => 'action',
             'type' => 'default',
             'total' => '10',
             'filter' => '610002',
             'spend_rp' => '10',
             'icon_url' => 'images/task/st_scarecrow_toy.png',
             'text' => 'Craft __total Scarecrow Toys',
             'show_me' => '101',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => -1,
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => 1200,
             'experience' => 200,
             'will_share' => '',
             'power' => 5,
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Ice Cream Stand IV',
         'description' => 'After the whole day I have a little bit of a brain freeze, hehe! Thanks for your help, Farmer!',
      ),
    ),
  ),
   20151130 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '20151130',
       'title' => 'Just For Test',
       'scene' => 1,
       'npc' => '2',
       'unlock_level' => 11,
       'visible' => 'TRUE',
       'des_button' => 'Just For Test',
       'description' => 'Just For Test',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'add_plant',
             'category' => 'action',
             'type' => 'default',
             'total' => '1000',
             'filter' => '4',
             'spend_rp' => '100',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Plant __total clover',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'fertilize',
             'category' => 'action',
             'type' => 'default',
             'total' => '1000',
             'filter' => 'fertilize',
             'ignore_filter' => '1',
             'spend_rp' => '100',
             'icon_url' => 'images/task/st_super_fertilizer.png',
             'text' => 'Use Super Fertilizer to fertilize __total times',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '1000',
             'filter' => '15',
             'spend_rp' => '100',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Harvest __total Clover',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Just For Test',
         'description' => 'Just For Test',
      ),
    ),
  ),
   20171110 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '20171110',
       'title' => 'Just For Test',
       'scene' => 3,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Just For Test',
       'description' => 'Just For Test',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'market_buy',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => 'none',
             'ignore_filter' => '1',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Buy __total from e-market',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'finish_order',
             'category' => 'action',
             'type' => 'default',
             'total' => '2',
             'filter' => 'order',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_super_fertilizer.png',
             'text' => 'finish __total order board',
          ),
        ),
         2 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '3',
             'action' => 'coins_increase',
             'category' => 'action',
             'type' => 'default',
             'total' => '1000',
             'filter' => 'all',
             'ignore_filter' => '1',
             'spend_rp' => '100',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Earn __total coins',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Just For Test',
         'description' => 'Just For Test',
      ),
    ),
  ),
   20171111 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '20171111',
       'title' => 'Just For Test',
       'scene' => 3,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Just For Test',
       'description' => 'Just For Test',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'cruisesFinishOrder',
             'category' => 'action',
             'type' => 'default',
             'total' => '5',
             'filter' => 'others',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_clover.png',
             'text' => 'Load __total orders for other boats',
          ),
        ),
         1 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '2',
             'action' => 'produce_product',
             'category' => 'action',
             'type' => 'default',
             'properties' => 'type:collectable',
             'total' => '2',
             'filter' => '500093',
             'spend_rp' => '50',
             'icon_url' => 'images/task/st_super_fertilizer.png',
             'text' => 'produce __total sauce',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '1000',
             'experience' => '230',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Just For Test',
         'description' => 'Just For Test',
      ),
    ),
  ),
   2014080501 => 
  (object)array(
     'attributes' => 
    (object)array(
       'id' => '2014080501',
       'title' => 'Need New Content',
       'scene' => 1,
       'npc' => '2',
       'visible' => 'TRUE',
       'des_button' => 'Need New Content',
       'description' => 'Need New Content',
       'opengraph_des' => 'Need New Content',
       'hint' => '',
    ),
     'tasks' => 
    (object)array(
       'task' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'task_id' => '1',
             'action' => 'collect_product',
             'category' => 'action',
             'type' => 'default',
             'total' => '40',
             'filter' => '42',
             'spend_rp' => '20',
             'icon_url' => 'images/task/st_grape.png',
             'text' => 'Need New Content',
          ),
        ),
      ),
    ),
     'nexts' => 
    (object)array(
       'next' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'id' => '0',
          ),
        ),
      ),
    ),
     'rewards' => 
    (object)array(
       'reward' => 
      (object)array(
         0 => 
        (object)array(
           'attributes' => 
          (object)array(
             'coins' => '265',
             'experience' => '30',
             'will_share' => '',
          ),
        ),
      ),
    ),
     'results' => 
    (object)array(
       'attributes' => 
      (object)array(
         'title' => 'Need New Content',
         'description' => 'Need New Content',
      ),
    ),
     'autojump' => 'FALSE',
  ),
)
?>