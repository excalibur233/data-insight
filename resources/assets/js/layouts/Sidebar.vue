<template>
  <aside>
    <el-row>
      <el-col :span="24">
        <el-menu :default-active="active" :default-openeds="openeds" router>
          <el-submenu v-for="(link, index) in links" :index="link.name" :key="link.name">
            <template slot="title">{{link.name}}</template>
            <el-menu-item-group v-for="sub_link in link.sub_links" :key="sub_link.name">
              <el-menu-item :index="sub_link.path">
                <i class="el-icon-message"></i>{{sub_link.name}}
              </el-menu-item>
            </el-menu-item-group>
          </el-submenu>
        </el-menu>
      </el-col>
    </el-row>
  </aside>
</template>

<script>
  export default {
    data(){
      return {
        links: [
          {
            name: 'Example',
            sub_links: [
              { name: 'Example1', path: '/example' },
            ]
          }, {
            name: '统计概览',
            sub_links: [
              { name: '所有', path: '/dashboard/all' },
              { name: '所有2', path: '/dashboard/all2' }
            ]
          }, {
            name: '用户行为分析',
            sub_links: [ { name: '事件分析', path: '/behavior/event' } ]
          }
        ],
        active: '/dashboard/all',
      }
    },
    computed: {
      openeds: function () {
        return this.links.map((val) => val.name)
      },
    },
  }
</script>

<style lang="scss">
  aside {
    position: absolute;
    top: 60px;
    bottom: 0;
    width: 230px;
    overflow-y: auto;
    >div {
      height: 100%;
      background-color: #eef1f6;
    }

    .el-menu-item-group > div {
      display: none;
    }
    .el-menu-item.is-active {
      background-color: #d1dbe5;
    }
  }
</style>