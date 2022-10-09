@extends('master')

@section('title', 'Paper Dragon')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-lg-5 col-md-5  title-text text-center">
                <h1>About</h1>
                <div class="row bg-ydark shadow-lg mb-5 rounded ">
                    <div class="col-12 p-3">Paper Dragon was launched on September 24, 2022 at 12:00 GMT with the goal of burning 50% of the supply without shortcuts.</div>
                    <div class="col-12 p-3">What's next? We are working on a side project that has utilization and good potential to generate income that we will use to improve liquidity for Paper Dragon. The project will be announced when it is ready for use.
                    </div>
                </div>
            </div>
            <div class="col-auto"></div>
            <div class="col-12 col-lg-6 col-md-6 title-text text-center">
                <h1>Where to buy</h1>
                <div class="row bg-ydark shadow-lg mb-5 rounded">
                    <div class="col-12 col-lg-6 mt-2 mb-2 text-center">
                        <h5>Buy on Uniswap</h5>
                        <a href="https://app.uniswap.org/#/swap?outputCurrency=0xc4ddd5bda8a30eff2e35b7a580b0f7fbfa6b502a">
                            <img src="{{ URL::asset("images/uniswap.png") }}" class="img-fluid" width="80%"  alt="One Paper Dragon">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 mt-2 mb-2 text-center">
                        <h5>Buy on 1inch</h5>
                        <a href="https://app.1inch.io/#/1/unified/swap/ETH/0xc4ddd5bda8a30eff2e35b7a580b0f7fbfa6b502a">
                            <img src="{{ URL::asset("images/1inch.png") }}" class="img-fluid" width="80%"  alt="One Paper Dragon">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 bg-yellow title-text text-center">
                <h1>Tokenomics</h1>
                <div class="row bg-ydark shadow-lg p-3 mb-5 rounded">
                    <div class="col-12"><b>Contract Address</b>: 0xC4dDD5Bda8A30EFF2E35b7a580B0f7fBfA6B502a</div>
                    <div class="col-12 m-2"></div>
                    <div class="col-lg-3 col-md-6"><b>Name</b>: Paper Dragon</div>
                    <div class="col-lg-3 col-md-6"><b>Symbol</b>: PAD</div>
                    <div class="col-lg-3 col-md-6"><b>Max Supply</b>: 1,000,000,000</div>
                    <div class="col-lg-3 col-md-6"><b>Total Supply</b>: 958,358,930 <small class="fst-italic">(08.10.22)</small></div>
                    <div class="col-12 m-2"></div>
                    <div class="col-lg-3 col-md-6"><b>Decimals</b>: 09</div>
                    <div class="col-lg-3 col-md-6"><b>Tax</b>: 4% / 4%</div>
                    <div class="col-lg-3 col-md-6"><b>Transfer Tax</b>: 2%</div>
                    <div class="col-lg-3 col-md-6"><b>100%</b> of tax is burned</div>
                    <div class="col-12 m-2"></div>
                    <div class="col-lg-3 col-md-12"><b>Audited</b>: Coming Soon</div>
                    <div class="col-lg-9 col-md-12"><b>Rug Proof</b>: Liquidity locked for 24 months. Ownership was renounced 2nd October 2022</div>
                    <div class="col-12 m-2"></div>
                </div>
            </div>

            <div class="col-12 bg-yellow title-text text-center">
                <h1>Get to know us better</h1>
                <div class="row bg-ydark shadow-lg p-3 mb-5 rounded">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <a class="knowusbetterlink" href="https://etherscan.io/token/0xc4ddd5bda8a30eff2e35b7a580b0f7fbfa6b502a">
                            <div class="card bg-ydark border-0">
                                <img src="{{ URL::asset("images/etherscan.png") }}" class="card-img-top px-4 pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title title-text-social">Etherscan</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <a class="knowusbetterlink" href="https://www.dextools.io/app/ether/pair-explorer/0x0f1b85da85b23fe3a4fff7d3e396c737dd164054">
                            <div class="card bg-ydark border-0">
                                <img src="{{ URL::asset("images/dextools.png") }}" class="card-img-top px-4 pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title title-text-social">Dextools</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <a class="knowusbetterlink" href="https://app.unicrypt.network/amm/uni-v2/pair/0x0f1b85da85b23fe3a4fff7d3e396c737dd164054">
                            <div class="card bg-ydark border-0">
                                <img src="{{ URL::asset("images/unicrypt.png") }}" class="card-img-top px-4 pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title title-text-social">Unicrypt</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <a class="knowusbetterlink" href="https://twitter.com/PaperDragonETH">
                            <div class="card bg-ydark border-0">
                                <img src="{{ URL::asset("images/twitter.png") }}" class="card-img-top px-4 pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title title-text-social">Twitter</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <a class="knowusbetterlink" href="https://t.me/JoinPaperDragon">
                            <div class="card bg-ydark border-0">
                                <img src="{{ URL::asset("images/telegram.png") }}" class="card-img-top px-4 pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title title-text-social">Telegram</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <a class="knowusbetterlink" href="https://paperdragoneth.medium.com/">
                            <div class="card bg-ydark border-0">
                                <img src="{{ URL::asset("images/medium.png") }}" class="card-img-top px-4 pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title title-text-social">Medium</h5>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-3"></div>
            <div class="col-auto">
                <img src="{{ URL::asset("images/pad_logo.png") }}" class="mx-auto d-block" alt="Paper Dragon">
            </div>
            <div class="col-3"></div>
            <div class="col-12 title-text text-center p-5">
                PAPER DRAGON © 2022. ALL RIGHTS RESERVED.
            </div>
        </div>
    </div>

@endsection
