 jQuery.fn.slidePicture = function (params) {
            var defaults = {
                container: 'slider',
                frameContainer: 'pictureList',
                numContainer: 'num'
            };

            var frames = jQuery('li', jQuery('#' + defaults.frameContainer));
            var numContainer = jQuery('#' + defaults.numContainer);
            var frameCount = frames.size();
            var numbers;

            var init = function () {
                for (var i = 1; i <= frameCount; i++) {
                    if (i == 1) { numContainer.append('<li class="curr">' + i + '</li>'); }
                    else { numContainer.append('<li>' + i + '</li>'); }
                }
                numbers = jQuery('li', numContainer);

                numbers.mouseenter(function () {
                    var index = jQuery(this).index();
                    if (current == index) { return; }
                    stopPlay();

                    hideFrame(current);
                    current = index;
                    showFrame(current);
                }).mouseout(function () {
                    startPlay();
                });
            }

            var current = 0;
            var timer;
            var startPlay = function () {
                window.clearInterval(timer);
                timer = window.setInterval(function () {
                    hideFrame(current);
                    current++;
                    if (current >= frameCount) {
                        current = 0;
                    }

                    showFrame(current);
                }, 3000);
            }

            var showFrame = function (index) {
                jQuery(numbers[current]).addClass('curr');
                jQuery(frames[current]).fadeIn();
            }

            var hideFrame = function (index) {
                jQuery(numbers[index]).removeClass('curr');
                jQuery(frames[index]).fadeOut();
            }
            var stopPlay = function () {
                window.clearInterval(timer);
            }
            init();
            startPlay();
        }

        jQuery.fn.imageScroller = function (params) {
            var defaults = {
                next: "#buttonNext",   //左按钮,传入一个selector
                prev: "#buttonPrev",   //右按钮,传入一个selector
                frame: "#frameView",   //滚动图片的父容器,传入一个selector
                width: 149,            //单个child滚动宽度(需包含边框)
                child: "li",           //滚动元素
                auto: true,            //是否自动滚动
                nAutoInterval: 3000,    //自滚动间隔时间
                nScrollChildren: 6,     //一次滚动child数
                nVisibleChildren: 6,    //每屏显示数		
                sScrollSpeed: 'slow',   //滚动速度 slow normal fast,可直接设置毫秒数
                bHoverStop: true,       //鼠标悬停在元素上是否停止滚动
                sMouseCursor: 'pointer', //按钮鼠标显示样式 
                sScrollDirection: 'marginLeft', //左右滚动时为'marginLeft',上下滚动式传入参数'marginTop'
                fCallBack: function () { } //滚动效果初始化后回调函数
            };
            var p = jQuery.extend(defaults, params);
            var _btnNext = jQuery(p.next);
            var _btnPrev = jQuery(p.prev);
            var _imgFrame = jQuery(p.frame);
            var _auto = p.auto;
            var _interval;  //interval事件	
            var _oScrollDirection1, _oScrollDirection2;      //兼容左右滚动和上下滚动
            var _oChildren = _imgFrame.find(p.child), _cLen = _oChildren.size();
            var _playing = false;

            var init = function () {
                //如果容器内容不足，取消初始化
                if (_cLen < p.nVisibleChildren) {
                    return;
                }

                _imgFrame.prepend(_oChildren.slice(_cLen - p.nVisibleChildren).clone(true)).append(_oChildren.slice(0, p.nVisibleChildren).clone(true));
                _cLen = _imgFrame.find(p.child).size();
                p.curr = p.start = p.nVisibleChildren;
                _imgFrame.css(p.sScrollDirection, -(p.curr * p.width));
                //console.log(_cLen);
                if (p.sScrollDirection == "marginLeft") {
                    _imgFrame.width(_cLen * p.width);     //重置滚动容器宽度
                    _oScrollDirection1 = { marginLeft: "-=" + p.nScrollChildren * p.width };
                    _oScrollDirection2 = { marginLeft: "+=" + p.nScrollChildren * p.width };
                }
                else {
                    _imgFrame.height(_cLen * p.width);     //重置滚动容器高度
                    _oScrollDirection1 = { marginTop: "-=" + p.nScrollChildren * p.width };
                    _oScrollDirection2 = { marginTop: "+=" + p.nScrollChildren * p.width };
                }

                //按钮事件样式绑定
                if (p.sMouseCursor != "") {
                    _btnNext.css("cursor", p.sMouseCursor);
                    _btnPrev.css("cursor", p.sMouseCursor);
                }
                _btnNext.click(turnRight);
                _btnPrev.click(turnLeft);

                //鼠标hover停止函数
                if (p.bHoverStop && _auto) {
                    _imgFrame.hover(
			  function () { fAutoStop(); },
			  function () { fAutoPlay(); }
			);
                };
                //回调函数
                p.fCallBack.call(_imgFrame);

                //自动滚动函数
                if (_auto) {
                    fAutoPlay();
                };
            };
            //向左(或向上)滚动	   
            var turnLeft = function () {
                if (_playing) return;
                _playing = true;
                if (_auto) fAutoStop();
                if (p.curr - p.nScrollChildren <= p.start - p.nVisibleChildren - 1) {
                    p.curr = _cLen - p.nVisibleChildren * 2 + p.curr;
                    _imgFrame.css(p.sScrollDirection, -(p.curr * p.width) + "px");
                }
                p.curr -= p.nScrollChildren;

                _imgFrame.animate(p.sScrollDirection == "marginLeft" ? { marginLeft: -(p.curr * p.width)} : { marginTop: -(p.curr * p.width) }, p.sScrollSpeed, '', function () {
                    _playing = false;
                    if (_auto) fAutoPlay();
                });
            };

            //向右(或向下)滚动
            var turnRight = function () {
                if (_playing) return;
                _playing = true;
                if (_auto) fAutoStop();
                if (p.curr + p.nScrollChildren >= _cLen - p.nVisibleChildren + 1) {
                    p.curr = p.curr - _cLen + p.nVisibleChildren * 2;
                    _imgFrame.css(p.sScrollDirection, -(p.curr * p.width) + "px");
                }
                p.curr += p.nScrollChildren;
                _imgFrame.animate(p.sScrollDirection == "marginLeft" ? { marginLeft: -(p.curr * p.width)} : { marginTop: -(p.curr * p.width) }, p.sScrollSpeed, '', function () {
                    _playing = false;
                    if (_auto) fAutoPlay();
                });
            };

            //自动滚动
            var fAutoPlay = function () {
                _interval = window.setTimeout(turnRight, p.nAutoInterval);
            };

            //停止自动滚动
            var fAutoStop = function () {
                window.clearTimeout(_interval);
            };

            //获取元素偏移顶部距离
            var offsettop = function (element) {
                var actualtop = element.offsetTop;
                var current = element.offsetParent;
                while (current !== null) {
                    actualtop += current.offsetTop;
                    current = current.offsetParent;
                }

                return actualtop;
            };

            //获取浏览器当前可视区域大小
            var clientHeight = function () {
                var pageHeight;
                if (typeof pageHeight != "number") {
                    if (document.compatMode == "CSS1Compat") {
                        pageHeight = document.documentElement.clientHeight;
                    } else {
                        pageHeight = document.body.clientHeight;
                    }
                }

                return pageHeight;
            };

            var offsetTop = offsettop(_imgFrame[0]);
            var scroll = function () {
                var scrollTop = document.body.scrollTop | document.documentElement.scrollTop;
                //如果是滚动到滚动图当前屏
                if (offsetTop <= (clientHeight() + scrollTop)) {
                    init();
                    jQuery(window).off("scroll", scroll);
                }
            };
            //如果是当前屏是滚动图所在屏
            if (offsetTop <= (clientHeight() + (document.body.scrollTop | document.documentElement.scrollTop))) {
                init();
            } else {
                jQuery(window).on("scroll", scroll);
            }
        };