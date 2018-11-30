<div class="admonition warning">
<p class="admonition-title">Installation on macOS</p>
<p>When you're running the pre-installed version of Python on macOS, <code class="codehilite">pip</code>
tries to install packages in a folder for which your user might not have
the adequate permissions. There are two possible solutions for this:</p>
<ol>
<li>
<p><strong>Installing in user space</strong> (recommended): Provide the <code class="codehilite">--user</code> flag
  to the install command and <code class="codehilite">pip</code> will install the package in a user-site
  location. This is the recommended way.</p>
</li>
<li>
<p><strong>Switching to a homebrewed Python</strong>: Upgrade your Python installation
  to a self-contained solution by installing Python with Homebrew. This
  should eliminate a lot of problems you may be having with <code class="codehilite">pip</code>.</p>
</li>
</ol>
</div>

https://yakworks.github.io/mkdocs-material-components/cheat-sheet/