<div class="container">
    <div class="row">
        <?php echo $this->Form->create($order); ?>
        <fieldset> <legend>Order Information</legend>
            <div class="form-group col-lg-6 col-sm-12">
            
                <label>Pizza Size</label>
                <?php
                    echo $this->Form->radio('pizzaSize',
                        [
                            ['value' => 'Small', 'text' => 'Small'],
                            ['value' => 'Med', 'text' => 'Medium'],
                            ['value' => 'Large', 'text' => 'Large'],
                            ['value' => 'XL', 'text' => 'X-Large']
                        ],
                        ['default' => 'Large']
                    ); 
                ?>
                <label>Crust Type</label>
                <?php
                    $crustType = ['Hand-tossed' => 'Hand-tossed', 'Pan' => 'Pan', 'Stuffed' => 'Stuffed', 'Thin' => 'Thin'];
                    echo $this->Form->radio('crustType', $crustType, ['default' => 'Hand-tossed']);
                ?>
            </div>
            <div class="form-group col-lg-6 col-sm-12">
                <label>Toppings</label>
                <?php
                        $toppings = ['tomato' => 'tomato', 
                                     'Green Pepper' => 'Green Pepper', 
                                     'red pepper' => 'red pepper', 
                                     'feta cheese' => 'feta cheese', 
                                     'chatter Cheese' => 'chatter Cheese', 
                                     'anchovies' => 'anchovies', 
                                     'Artichoke' => 'Artichoke', 
                                     'Spinach' => 'Spinach', 
                                     'Garlic' => 'Garlic', 
                                     'RedOnion' =>'RedOnion'
                                    ];
                        echo $this->Form->input('toppings', 
                                                array('label' => false,
                                                    'type' => 'select',
                                                    'multiple'=>'checkbox',
                                                    'options' => $toppings)
                                                      ); 
                    ?>
            </div>
        </fieldset>
         <?php
            echo $this->Form->button(__('Save Order')); 
            echo $this->Form->end();
        ?>
    </div>
</div>