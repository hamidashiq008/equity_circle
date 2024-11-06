
<x-app-layout layout="chatlayout" :assets="$assets ?? []"  :groupImages="false" >

    <div class="tab-content" id="myTabContent">
        <div class="card tab-pane mb-0 fade show active" id="user-content-101" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Paul Molive" userProfileImg="avatar/01.png" status="Online" statusidentify="online" />
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>


                <x-modules.chat.widgets.right-chat messageTime="16:34" userImg="avatar/10.png" message="How can we help? We're here for you! 😄" />

                <x-modules.chat.widgets.left-chat  messageTime="16:40" userImg="avatar/01.png" message="Hey John, I am looking for the best admin template.Could you please help me to find it out? 🤔" />

                <x-modules.chat.widgets.right-chat  messageTime="6:49" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template." />


                <x-modules.chat.widgets.left-chat messageTime="6:52" userImg="avatar/01.png" message="Looks clean and fresh UI." />

                <x-modules.chat.widgets.right-chat  messageTime="6:53" userImg="avatar/10.png" message="Thanks, from ThemeForest."/>


                {{-- <x-modules.chat.widgets.right-chat username="" messageTime="16:34" userImg="avatar/01.png" Image='true' groupImages='true' message="How can we help? We're here for you! 😄" /> --}}

                <x-modules.chat.widgets.left-chat messageTime="6:54" userImg="avatar/01.png" message="I will purchase it for sure. 👍" />

                <x-modules.chat.widgets.right-chat  messageTime="6:55" userImg="avatar/10.png" message="Okay Thanks.."  />

                <x-modules.chat.widgets.left-chat messageTime="7:54" userImg="avatar/01.png" message="Looks clean and fresh UI." />
                 <x-modules.chat.widgets.right-chat messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest." />
            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>
        <div class="card tab-pane mb-0 fade" id="user-content-102" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="John Travolta" userProfileImg="avatar/02.png" status="Online" statusidentify="online" />
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 2,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat messageTime="16:34" userImg="avatar/10.png" message="How can we help? We're here for you! 😄" />

                <x-modules.chat.widgets.left-chat  messageTime="16:40" userImg="avatar/02.png" message="Hey John, I am looking for the best admin template. Could you please help me to find it out? 🤔" />


                <x-modules.chat.widgets.right-chat messageTime="6:49" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template."  />


                <x-modules.chat.widgets.left-chat  messageTime="6:52" userImg="avatar/02.png" message="Looks clean and fresh UI." />


                <x-modules.chat.widgets.right-chat messageTime="6:53" userImg="avatar/10.png" message="Thanks, from ThemeForest." />

                <x-modules.chat.widgets.left-chat messageTime="6:54" userImg="avatar/02.png" message="I will purchase it for sure. 👍"  />

                <x-modules.chat.widgets.right-chat messageTime="6:55" userImg="avatar/10.png" message="Okay Thanks.." />
                <x-modules.chat.widgets.left-chat  messageTime="7:54" userImg="avatar/02.png" message="Looks clean and fresh UI."  />
                <x-modules.chat.widgets.right-chat messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest." />
            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>


        <div class="card tab-pane mb-0 fade" id="user-content-103" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="Barb Ackue" userProfileImg="avatar/03.png" status="Online" statusidentify="online"/>
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat messageTime="16:34" userImg="avatar/10.png" message="How can we help? We're here for you! 😄" />

                <x-modules.chat.widgets.left-chat messageTime="16:40" userImg="avatar/03.png" message="Hey John, I am looking for the best admin template. Could you please help me to find it out? 🤔" />

                <x-modules.chat.widgets.right-chat messageTime="6:49" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template." />

                <x-modules.chat.widgets.left-chat messageTime="6:52" userImg="avatar/03.png" message="Looks clean and fresh UI." />


                <x-modules.chat.widgets.right-chat messageTime="6:53" userImg="avatar/10.png" message="Thanks, from ThemeForest." />



                {{-- <x-modules.chat.widgets.right-chat username="" messageTime="08:00" userImg="avatar/01.png" Image='true' groupImages='true' message="Thanks, from ThemeForest."/> --}}

                <x-modules.chat.widgets.left-chat messageTime="6:54" userImg="avatar/03.png" message="I will purchase it for sure. 👍" />


                <x-modules.chat.widgets.right-chat messageTime="6:55" userImg="avatar/10.png" message="Okay Thanks.." />

                <x-modules.chat.widgets.left-chat messageTime="7:54" userImg="avatar/03.png" message="Looks clean and fresh UI." />
                <x-modules.chat.widgets.right-chat messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest." />

            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>

        <div class="card tab-pane mb-0 fade" id="user-content-104" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="Robert Fox" userProfileImg="avatar/04.png" status="Online" statusidentify="online"/>
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat  messageTime="16:34" userImg="avatar/10.png" message="How can we help? We're here for you! 😄" />

                <x-modules.chat.widgets.left-chat messageTime="16:40" userImg="avatar/04.png" message="Hey John, I am looking for the best admin template.Could you please help me to find it out? 🤔"/>

                <x-modules.chat.widgets.right-chat messageTime="6:49" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template."/>

                <x-modules.chat.widgets.left-chat messageTime="6:52" userImg="avatar/04.png" message="Looks clean and fresh UI." />
                {{-- <x-modules.chat.widgets.left-chat username="" messageTime="17:01" userImg="avatar/01.png" message="I will purchase it for sure." /> --}}

                <x-modules.chat.widgets.right-chat  messageTime="6:53" userImg="avatar/10.png" message="Thanks, from ThemeForest." />

                {{-- <div class="chat-day-title">
                    <span class="main-title">Today</span>
                </div> --}}

                {{-- <x-modules.chat.widgets.right-chat username="" messageTime="08:00" userImg="avatar/01.png" Image='true' groupImages='true' message="Thanks, from ThemeForest."/> --}}

                <x-modules.chat.widgets.left-chat messageTime="6:54" userImg="avatar/04.png" message="I will purchase it for sure. 👍"/>


                <x-modules.chat.widgets.right-chat messageTime="6:55" userImg="avatar/10.png" message="Okay Thanks.." />

                <x-modules.chat.widgets.left-chat messageTime="7:54" userImg="avatar/04.png" message="Looks clean and fresh UI."/>
                <x-modules.chat.widgets.right-chat  messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest." />
                <x-modules.chat.widgets.left-chat messageTime="7:54" userImg="avatar/04.png" message="Looks clean and fresh UI."/>
                <x-modules.chat.widgets.right-chat   messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest." />
                <x-modules.chat.widgets.left-chat messageTime="7:54" userImg="avatar/04.png" message="Looks clean and fresh UI."/>
                <x-modules.chat.widgets.right-chat   messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest." />

            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>
        <div class="card tab-pane mb-0 fade" id="user-content-105" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="Maya Didas" userProfileImg="avatar/05.png" status="Offline" statusidentify="offline" />
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat  messageTime="16:34" userImg="avatar/10.png" message="How can we help? We're here for you! 😄" />

                <x-modules.chat.widgets.left-chat  messageTime="16:40" userImg="avatar/05.png" message="Hey John, I am looking for the best admin template. Could you please help me to find it out? 🤔" />


                <x-modules.chat.widgets.right-chat messageTime="6:49" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template." />

                <x-modules.chat.widgets.left-chat messageTime="6:52" userImg="avatar/05.png" message="Looks clean and fresh UI."/>


                <x-modules.chat.widgets.right-chat  messageTime="6:53" userImg="avatar/10.png" message="Thanks, from ThemeForest." />
{{--
                <div class="chat-day-title">
                    <span class="main-title">Today</span>
                </div> --}}

                {{-- <x-modules.chat.widgets.right-chat username="" messageTime="08:00" userImg="avatar/01.png" Image='true' singleImage='true' message="Thanks, from ThemeForest."/> --}}

                <x-modules.chat.widgets.left-chat messageTime="6:54" userImg="avatar/05.png" message="I will purchase it for sure. 👍" />


                <x-modules.chat.widgets.right-chat  messageTime="6:55" userImg="avatar/10.png" message="Okay Thanks.."/>

                <x-modules.chat.widgets.left-chat messageTime="7:54" userImg="avatar/05.png" message="Looks clean and fresh UI."  />
                <x-modules.chat.widgets.right-chat messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest."/>

            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>
        <div class="card tab-pane mb-0 fade" id="user-content-106" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="Monty Carlo" userProfileImg="avatar/06.png" status="Online" statusidentify="online" />
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/10.png" message="Hey, how are you??"/>

                <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="16:40" userImg="avatar/06.png" message="Hey, I am looking for the best dashboard template. Could you please help me to find it out?" />

                <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template." />

                <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="17:00" userImg="avatar/06.png" message="Looks clean and fresh UI." />
                <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="17:01" userImg="avatar/06.png" message="I will purchase it for sure." />


                <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/10.png" message="Ok Cool!!"/>
                <div class="chat-day-title">
                    <span class="main-title">Today</span>
                 </div>

                <x-modules.chat.widgets.right-chat username="Darlene Warner" messageTime="12:00" userImg="avatar/06.png" message="This are nice pics."/>

                <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="12:05" userImg="avatar/06.png" message="I want some teachnic for fast code can you help?" />


                <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/10.png" message="Yes Look clean and fresh UI." />
                <div></div>
                <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="15:00" userImg="avatar/06.png" Image='true' singleImage="true"  />
            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>
        <div class="card tab-pane mb-0 fade" id="user-content-107" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="Paige Turner" userProfileImg="avatar/07.png" status="Online" statusidentify="online" />
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat messageTime="16:34" userImg="avatar/10.png" message="How can we help? We're here for you! 😄" />
                <x-modules.chat.widgets.left-chat messageTime="16:40" userImg="avatar/07.png" message="Hey John, I am looking for the best admin template. Could you please help me to find it out? 🤔" />



                <x-modules.chat.widgets.right-chat   messageTime="6:49" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template." />

                <x-modules.chat.widgets.left-chat messageTime="6:52" userImg="avatar/07.png" message="Looks clean and fresh UI."/>
                <x-modules.chat.widgets.right-chat messageTime="6:53" userImg="avatar/10.png" message="Thanks, from ThemeForest."/>

                <x-modules.chat.widgets.left-chat messageTime="6:54" userImg="avatar/07.png" message="I will purchase it for sure. 👍"/>

                <x-modules.chat.widgets.right-chat messageTime="6:55" userImg="avatar/10.png" message="Okay Thanks.."/>

                {{-- <div class="chat-day-title">
                    <span class="main-title">Today</span>
                </div> --}}

                {{-- <x-modules.chat.widgets.right-chat messageTime="7:54" userImg="avatar/07.png" message="Looks clean and fresh UI." /> --}}

                <x-modules.chat.widgets.left-chat  messageTime="7:54" userImg="avatar/07.png" message="Looks clean and fresh UI."/>


                <x-modules.chat.widgets.right-chat messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest." />
                <div></div>
                {{-- <x-modules.chat.widgets.left-chat username="" messageTime="15:00" userImg="avatar/06.png" message="Okay, I will visit this place."  /> --}}
            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>


        <div class="card tab-pane mb-0 fade" id="user-content-108" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="Arnold Schwarzenegger" userProfileImg="avatar/08.png" status="Offline" statusidentify="offline"/>
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat messageTime="16:34" userImg="avatar/10.png" message="How can we help? We're here for you! 😄" />



                {{-- <x-modules.chat.widgets.right-chat username="" messageTime="16:42" userImg="avatar/01.png" message="Lorem ipsum dolor sit" /> --}}

                <x-modules.chat.widgets.left-chat   messageTime="16:40" userImg="avatar/08.png" message="Hey John, I am looking for the best admin template. Could you please help me to find it out? 🤔" />


                <x-modules.chat.widgets.right-chat messageTime="6:49" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template." />

                {{-- <div class="chat-day-title">
                    <span class="main-title">Today</span>
                </div> --}}

                {{-- <x-modules.chat.widgets.right-chat username="" messageTime="08:00" userImg="avatar/01.png" Image='true' singleImage='true' message="Thanks, from ThemeForest." /> --}}

                <x-modules.chat.widgets.left-chat messageTime="6:52" userImg="avatar/08.png" message="Looks clean and fresh UI." />


                <x-modules.chat.widgets.right-chat  messageTime="6:53" userImg="avatar/10.png" message="Thanks, from ThemeForest." />

                <x-modules.chat.widgets.left-chat messageTime="6:54" userImg="avatar/08.png" message="I will purchase it for sure. 👍"  />
                <x-modules.chat.widgets.right-chat  messageTime="6:55" userImg="avatar/10.png" message="Okay Thanks.."  />
                <x-modules.chat.widgets.left-chat messageTime="7:54" userImg="avatar/08.png" message="Looks clean and fresh UI."  />
                <x-modules.chat.widgets.right-chat  messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest."  />


            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>
        <div class="card tab-pane mb-0 fade" id="user-content-109" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="Leonardo DiCaprio" userProfileImg="avatar/09.png" status="Online" statusidentify="online"  />
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat messageTime="16:34" userImg="avatar/10.png" message="How can we help? We're here for you! 😄" />

                <x-modules.chat.widgets.left-chat messageTime="16:40" userImg="avatar/09.png" message="Hey John, I am looking for the best admin template.Could you please help me to find it out? 🤔" />

                <x-modules.chat.widgets.right-chat messageTime="6:49" userImg="avatar/10.png" message="Absolutely Yes! SocialV is the Responsive Bootstrap 5 Admin Dashboard Template."  />


                <x-modules.chat.widgets.left-chat messageTime="6:52" userImg="avatar/09.png" message="Looks clean and fresh UI."  />

                <x-modules.chat.widgets.right-chat messageTime="6:53" userImg="avatar/10.png" message="Thanks, from ThemeForest."/>

                {{-- <div class="chat-day-title">
                    <span class="main-title">Today</span>
                </div> --}}

                {{-- <x-modules.chat.widgets.right-chat username="" messageTime="08:00" userImg="avatar/01.png" Image='true' groupImages='true' message="Thanks, from ThemeForest." /> --}}

                <x-modules.chat.widgets.left-chat messageTime="6:54" userImg="avatar/09.png" message="I will purchase it for sure. 👍" />


                <x-modules.chat.widgets.right-chat messageTime="6:55" userImg="avatar/10.png" message="Okay Thanks.." />

                <x-modules.chat.widgets.left-chat messageTime="7:54" userImg="avatar/09.png" message="Looks clean and fresh UI." />
                <x-modules.chat.widgets.right-chat messageTime="7:55" userImg="avatar/10.png" message="Thanks, from ThemeForest."/>
            </div>
            <x-modules.chat.widgets.chat-footer />
        </div>
        {{-- <div class="card tab-pane mb-0 fade" id="user-content-110" role="tabpanel">
            <x-modules.chat.widgets.chat-header userName="Monty Carbo" userProfileImg="avatar/10.png" status="Online" statusidentify="online" />
            <div class="card-body chat-body bg-body">
                <div class="chat-day-title">
                    <span class="main-title">Feb 1,2021</span>
                </div>

                <x-modules.chat.widgets.right-chat username="" messageTime="16:34" userImg="avatar/01.png" message="Hey, how are you??" />


                <x-modules.chat.widgets.right-chat username="" messageTime="16:42" userImg="avatar/01.png" message="Lorem ipsum dolor sit" />

                <x-modules.chat.widgets.left-chat username="" messageTime="17:00" userImg="avatar/10.png" Image='true' groupImages='true' message="Thanks, from ThemeForest."/>


                <x-modules.chat.widgets.right-chat username="" messageTime="17:10" userImg="avatar/01.png" message="Nice!" />

                <div class="chat-day-title">
                    <span class="main-title">Today</span>
                </div>

                <x-modules.chat.widgets.right-chat username="" messageTime="08:00" userImg="avatar/01.png" Image='true' singleImage='true' message="How can we help? We're here for you! 😄"  />

                <x-modules.chat.widgets.left-chat username="" messageTime="12:00" userImg="avatar/10.png" message="Hey John, I am looking for the best admin template.
                Could you please help me to find it out? 🤔" />


                <x-modules.chat.widgets.right-chat username="" messageTime="13:10" userImg="avatar/01.png" message="I will purchase it for sure. 👍" />
                <div></div>
                <x-modules.chat.widgets.left-chat username="" messageTime="15:00" userImg="avatar/10.png" message="Thanks, from ThemeForest."  />
            </div>
            <x-modules.chat.widgets.chat-footer />
        </div> --}}
    </div>
    </x-app-layout>
