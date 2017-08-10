<template>
  <header>
    <el-menu theme="dark"  mode="horizontal" router @select="handleSelect">
      <el-menu-item index="example">Example</el-menu-item>
      <el-submenu index="test">
        <template slot="title">我的工作台</template>
        <el-menu-item index="test1">选项1</el-menu-item>
        <el-menu-item index="test2">选项2</el-menu-item>
        <el-menu-item index="test3">选项3</el-menu-item>
      </el-submenu>
      <slot></slot>
    </el-menu>
  </header>
</template>


<script>
  export default {
    data() {
      return {
        activeIndex: '1',
      };
    },
    methods: {
      handleSelect(key, keyPath) {
//        console.log(key, keyPath);
      }
    }
  }
</script>