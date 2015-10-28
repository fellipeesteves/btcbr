    <!-- .main__cell -->
    <div class="main__cell" ng-hide="fakeIntro">
        <!-- .rate -->
        <div class="rate">
            <h1 class="rate__title">
            </h1>

            <!-- .rate-field -->
            <div class="rate-field">
                <input ng-model="btc" ng-change="changeBTC()" step="0.00000001" type="number" class="rate-field__input" />
                <div class="rate-field__addon">
                    BTC
                </div>
            </div>
            <!-- /.rate-field -->

            <!-- .rate-divider -->
            <div class="rate-divider">
                <i class="icon-loop"></i>
            </div>
            <!-- /.rate-divider -->

            <!-- .rate-field -->
            <div class="rate-field">
                <input step="0.01" ng-model="brl" ng-change="changeBRL()" type="number" class="rate-field__input" />
                <div class="rate-field__addon">
                    BRL
                </div>
            </div>
            <!-- /.rate-field -->
        </div>
        <!-- /.rate -->
    </div>
    <!-- /.main__cell -->

<!--p><strong>Patrocine esse Projeto:</strong> 1Pg3up9SJYhYTH68CmhqLxTdADjbPhJv8Z</p-->
