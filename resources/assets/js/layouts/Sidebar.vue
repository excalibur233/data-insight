<template>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!--<li class="header">HEADER</li>-->
        <template v-for="link in links">
          <template v-if="link.path">
            <li>
              <router-link :to="link.path"><i class="fa fa-link"></i> <span>{{link.name}}</span></router-link>
            </li>
          </template>
          <template v-else>
            <li class="treeview menu-open">
              <a href="#"><i class="fa fa-link"></i> <span>{{link.name}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu" style="display: block">
                <li v-for="sub_link in link.sub_links">
                  <router-link :to="sub_link.path">{{sub_link.name}}</router-link>
                </li>
              </ul>
            </li>
          </template>
        </template>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
</template>

<script>
	export default {
		data(){
			return {
				links: [{
					name: 'Example',
					path: '/example',
				}, {
					name: '123',
					sub_links: [{name: 123, path: '/123'}]
				}]
			}
		},
    mounted() {
      this.active_link();
    },
		watch: {
			'$route': 'active_link',
		},
		methods: {
			active_link: function () {
				$(`a`).parents('li').removeClass('active');
				$(`a[href='#${this.$route.path}']`).parent('li').addClass('active').parents('.treeview').addClass('active');
			}
		}
	}
</script>